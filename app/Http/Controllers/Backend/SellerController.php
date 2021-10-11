<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Division;
use App\Models\Item;
use App\Models\PostCode;
use App\Models\SellerProfile;
use App\Models\SellerBusinessAddress;
use App\Models\SellerReturnAddress;
use Illuminate\Http\Request;
use App\Seller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use NabilAnam\SimpleUpload\SimpleUpload;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::paginate(10);
        return view('backend.seller.index', compact('sellers'));
    }
    public function create()
    {
        return view('backend.seller.create', ["divisions" => Division::all(), 'cities' =>  City::all(), 'allArea' => PostCode::all()]);
    }

    public function store(Request $request)
    {
        try {
            $data               = $request->all();
            $data['slug']       = Str::slug($request->shop_name);
            $data['password']   = Hash::make(trim($request->password));
            Seller::create($data);
        } catch (\Exception $e) {
            return $e;
        }
        return redirect()->route('backend.seller.index')->with('message', 'Seller Added Successfully');
    }
    public function premium()
    {
        $sellers = Seller::orderByDesc('premium_order')->get(['id', 'name']);
        $premiums = Seller::where('is_premium', true)->orderBy('premium_order')->take(6)->get();
        return view('backend.seller.premium', compact('sellers', 'premiums'));
    }
    public function update_premium(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|numeric',
            'status' => 'required|numeric'
        ]);
        $sellers = Seller::where('is_premium', true)->select('id', 'premium_order')->orderBy('premium_order')->get();
        foreach ($sellers as $key => $seller) {
            $seller->premium_order = $key;
            $seller->save();
        }
        Seller::where('id', '!=', $request->seller_id)->where('premium_order', $request->premium_order)->update([
            'premium_order' => null,
            'is_premium' => false
        ]);
        $seller = Seller::find($request->seller_id);
        $seller->is_premium = $request->status;
        $seller->premium_order = $request->premium_order;
        $seller->save();
        return back();
    }
    public function search(Request $request)
    {
        $data     = $request->search;
        $sellers    = Seller::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere('mobile', 'LIKE', '%' . $data . '%')
            ->orWhere('email', 'LIKE', '%' . $data . '%')
            ->orWhere('shop_name', 'LIKE', '%' . $data . '%')
            ->paginate(25);
        return view('backend.seller.index', compact('sellers'));
    }
    public function status(Request $request, $id)
    {
        $seller = Seller::find($id);
        $seller->status = $request->status == true ? 1 : 0;;
        $seller->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function edit($id)
    {
        $sellerInfo         = Seller::whereId($id)->With('profile', 'businessAddress', 'returnAddress')->first();
        $seller             = SellerProfile::where('seller_id', $id)->first();
        $allCity            = City::get(['id', 'name']);
        $divisions          = Division::get(['id', 'name']);
        $allArea            = PostCode::get(['id', 'name']);
        $seller_id          = $id;
        return view('backend.seller.edit', compact('allCity', 'divisions', 'allArea', 'sellerInfo','seller'));

    }
    public function update(Request $request, $id)
    {
        if ($request->name || $request->login_email || $request->login_mobile) {
            $this->seller($request);
        }
        try {
            DB::beginTransaction();
            $this->updateSellerBusinessAddress($request, $id);
            $this->updateSellerReturnAddress($request, $id);
            if (isset($id)) {
                $seller = SellerProfile::updateOrCreate(
                    ['seller_id' => $id],
                    [
                        'proprietor_name'           => $request->proprietor_name,
                        'registration_number'       => $request->registration_number,
                        'crporate_address'          => $request->crporate_address,
                        'vat_registration_number'   => $request->vat_registration_number,
                        'nid_number'                => $request->nid_number,
                        'trade_licenses'            => $request->trade_licenses,
                        'main_business'             => $request->main_business,
                        'product_category'          => $request->product_category,
                        'corporate_number'          => $request->corporate_number,
                        'location_details'          => $request->location_details,
                        'address'                   => $request->address,
                        'division'                  => $request->division,
                        'city'                      => $request->city,
                        'postcode'                  => $request->postcode,
                    ]
                );
                $seller->update([
                    'seller_logo'                   => $request->file('seller_logo') ? (new SimpleUpload)->file($request->seller_logo)->deleteIfExists($seller->image)->dirName('seller-logo')->save(): $seller->seller_logo,
                    'product_image'                 => $request->file('product_image') ? (new SimpleUpload)->file($request->product_image)->deleteIfExists($seller->product_image)->resizeImage(203, 203)->dirName('product_image')->save() : $seller->product_image,
                    'logo'                          => $request->file('seller_logo') ? (new SimpleUpload)->file($request->seller_logo)->deleteIfExists($seller->logo)->resizeImage(44, 44)->dirName('logo')->save() : $seller->logo,
                ]);

            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex->getMessage());
        }

        return back()->with('message', 'Data Updated Successfully.');
    }


    public function destroy(Seller $seller)
    {
        try {
            SellerBusinessAddress::where('seller_id', $seller->id)->delete();
            SellerReturnAddress::where('seller_id', $seller->id)->delete();
            $seller->delete();
        } catch (\Exception  $e) {
            return back()->with('message', "Sorry can't Deleted.");
        }
        return back()->with('message', 'Seller Deleted Successfully');
    }



    public function updateSellerBusinessAddress($request, $id)
    {
        if (isset($id)) {
            $seller = SellerBusinessAddress::where('seller_id', $id)->first();
            if($seller){
                $seller->update([
                    'business_address'  => $request->business_address,
                    'business_division' => $request->business_division,
                    'business_city'     => $request->business_city,
                    'business_postcode' => $request->business_postcode,
                ]);
            }else{
                SellerBusinessAddress::create([
                    'seller_id'         => $id,
                    'business_address'  => $request->business_address,
                    'business_division' => $request->business_division,
                    'business_city'     => $request->business_city,
                    'business_postcode' => $request->business_postcode,
                ]);
            }

            return true;
        }

    }

    public function updateSellerReturnAddress($request, $id)
    {
        if (isset($id)) {
                $seller = SellerReturnAddress::where('seller_id', $id)->first();
                if ($seller) {
                    $seller->update([
                        'return_address'    => $request->return_address,
                        'return_division'   => $request->return_division,
                        'return_city'       => $request->return_city,
                        'return_postcode'   => $request->return_postcode,
                    ]);
                } else {
                    SellerReturnAddress::create([
                        'seller_id'         => $id,
                        'return_address'    => $request->return_address,
                        'return_division'   => $request->return_division,
                        'return_city'       => $request->return_city,
                        'return_postcode'   => $request->return_postcode,
                    ]);
                }
            return true;
        }

    }

    private function seller($request)
    {
        $request->validate([
            'name'            => 'required|string|min:3',
            'login_mobile'    => 'required|numeric|regex:/^01[0-9]{9}$/',
            'login_email'     => 'email'
        ]);
        try {
            $sellerInfo             = $request->only('name');
            $sellerInfo['email']    = $request->login_email;
            $sellerInfo['mobile']   = $request->login_mobile;
            Seller::whereId(auth()->id())->update($sellerInfo);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
