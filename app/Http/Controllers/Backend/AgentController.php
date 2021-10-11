<?php
namespace App\Http\Controllers\Backend;

use App\Delivery;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\AgentAllocatedArea;
use App\Models\AgentExtendArea;
use App\Models\City;
use App\Models\Division;
use App\Models\PostCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use NabilAnam\SimpleUpload\SimpleUpload;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AgentController extends Controller
{

    public function index()
    {
        $agents =  Agent::paginate(20);
        return view('backend.agent.index', compact('agents'));
    }

    public function create()
    {
        $divisions  = Division::get(['id', 'name']);
        return view('backend.agent.create', compact('divisions'));
    }

    public function store(Request $request, SimpleUpload $upload, Agent $agent, Delivery $delivery)
    {
        $request->validate([
            'type'                  => 'required',
            'name'                  => 'required|string',
            'email'                 =>  'required|unique:deliveries,email',
            'phone'                 =>  'required|unique:deliveries,phone',
            'nid_number'            =>  ['nullable', 'unique:agents,nid_number'],
            'bankaccountnumber'     =>  ['nullable', 'unique:agents,bankaccountnumber'],
            'bikashnumber'          =>  ['nullable', 'unique:agents,bikashnumber'],
            'address'               => 'required|string',
            'contact_person'        => 'nullable|string',
            'logo'                  => 'nullable',
            'adiv_id'               => 'nullable|string',
            'acity_id'              => 'nullable|string',
            'exdiv_id'              => 'nullable|string',
            'excity_id'             => 'nullable|string',
        ]);
        DB::beginTransaction();
        try {
            $data               =   $request->all();
            $delivery_id        =   $this->delivery($request, $delivery);
            $data['password']   =   Hash::make($request->password);
            if ($request->has('logo')) {
                $data['logo']   =   $upload->file($request->logo)->dirName('agents')->resizeImage('40', '40')->save();
            }
            $data['delivery_id'] =  $delivery_id;
            $agent_id           =   $agent->create($data)->id;

            if($request->adiv_id){
                $this->agentallocatedarea($request, $agent_id);
            }

            if($request->exdiv_id){
                $this->agentextendedarea($request, $agent_id);
            }
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return back()->with('message', 'Sorry Something is Wrong.');
        }

        return redirect()->route('backend.agent.index')->with('message', 'Agent Added Successfully');
    }


    public function show(Agent $agent)
    {
        $cities = City::all();
        $divisions = Division::all();
        return view('backend.agent.show', compact('agent', 'divisions', 'cities'));
    }


    public function edit(Agent $agent)
    {
        $divisions  = Division::get(['id', 'name']);
        $cities     = City::get(['id', 'name']);
        $postcodes  = PostCode::get(['id', 'name']);
        return view('backend.agent.edit', compact('agent', 'divisions', 'cities', 'postcodes'));
    }


    public function update(Request $request, SimpleUpload $upload, Agent $agent, Delivery $delivery)
    {
        // return($request->all());
        $request->validate([
            'type'                  => 'required',
            'name'                  => 'required|string',
            'phone'                 => ['required', Rule::unique('deliveries')->ignore($agent->delivery_id)],
            'email'                 => ['required', Rule::unique('deliveries')->ignore($agent->delivery_id)],
            'nid_number'            => ['required', 'unique:agents,nid_number,'.$agent->id],
            'bankaccountnumber'     => ['required', 'unique:agents,bankaccountnumber,'.$agent->id],
            'bikashnumber'          => ['required', 'unique:agents,bikashnumber,'.$agent->id],
            'address'               => 'required|string',
            'contact_person'        => 'nullable|string',
            'logo'                  => 'nullable',
            'adiv_id'               => 'nullable|string',
            'acity_id'              => 'nullable|string',
            'exdiv_id'              => 'nullable|string',
            'excity_id'             => 'nullable|string',
        ]);

        if ($request->file('logo')) {
            $logo = $upload->file($request->logo)->dirName('agents')->deleteIfExists($agent->logo)->resizeImage('40', '40')
                ->save();
        }
        DB::beginTransaction();
        $this->deliveryUpdate($request, $agent->delivery_id);

        try {
            $agent->update([
                'type'                  => $request->type,
                'name'                  => $request->name,
                'delivery_id'           => $agent->delivery_id,
                'contact_person'        => $request->contact_person ?? ' ',
                'logo'                  => $logo ?? $agent->logo,
                'nid_number'            => $request->nid_number,
                'bank_name'             => $request->bank_name,
                'bankaccountnumber'     => $request->bankaccountnumber,
                'bikashnumber'          => $request->bikashnumber,
                'address'               => $request->address,
                'education'             => $request->education ?? ' ',
            ]);
            // return $agent->id;

            if($request->adiv_id){

                $this->agentallocatedareaUpdated($request, $agent->id);
            }
            if($request->exdiv_id){
                $this->agentextendedareaUpdated($request, $agent->id);
            }

            DB::commit();
        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            return back()->with('message', 'Sorry Something is Wrong.');
        }
        return back()->with('message', 'Agent Updated Successfully');

    }

    public function destroy(Agent $agent)
    {
        try {
            Delivery::where('id', $agent->delivery_id)->delete();
        } catch (\Exception $e) {
            return back()->with('message', 'This Agent Related with others Table.');
        }
        return back()->with('message', 'Deleted Successfully');
    }

    public function locatedarea($cityId)
    {
        $data = PostCode::where('city_id', $cityId)->get(['id', 'name']);
        return response()->json($data);
    }

    public function search(Request $request)
    {
        $q = $request->search;
        $agents = Agent::where('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->orWhere('nid_number', 'LIKE', '%' . $q . '%')
                    ->orWhere('nid_number', 'LIKE', '%' . $q . '%')
                    ->orWhere('bank_name', 'LIKE', '%' . $q . '%')
                    ->orWhere('bankaccountnumber', 'LIKE', '%' . $q . '%')
                    ->orWhere('address', 'LIKE', '%' . $q . '%')
                    ->orWhere('bikashnumber', 'LIKE', '%' . $q . '%')
                    ->orWhere('education', 'LIKE', '%' . $q . '%')
                    ->orWhere('phone', 'LIKE', '%' . $q . '%')
                    ->paginate(25);
        return view('backend.agent.index', compact('agents'));
    }


    private function agentallocatedarea($request, $agent_id)
    {
        $allocated          =  AgentAllocatedArea::create([
            'agent_id'      => $agent_id,
            'division_id'   => $request->adiv_id,
            'city_id'       => $request->acity_id,
        ]);

        if ($request->aarea_ids) {
            $allocated->posts()->sync($request->aarea_ids);
        }
    }

    private function agentallocatedareaUpdated($request, $agent_id)
    {
        $allocated          =  AgentAllocatedArea::updateOrCreate([
            'agent_id'      => $agent_id,
        ],[
            'division_id'   => $request->adiv_id,
            'city_id'       => $request->acity_id,
        ]);

        if($request->aarea_ids) {
            $allocated->posts()->sync($request->aarea_ids);
        }

    }


    private function agentextendedarea($request, $agent_id)
    {
        $extended           =  AgentExtendArea::create([
            'agent_id'      => $agent_id,
            'division_id'   => $request->exdiv_id,
            'city_id'       => $request->excity_id,
        ]);
        // dd($request->all(), 'joy');
        if ($request->exarea_ids) {
           return  $extended->posts()->sync($request->exarea_ids);
        }
    }

    private function agentextendedareaUpdated($request, $agent_id)
    {
        $extended           =  AgentExtendArea::updateOrCreate([
            'agent_id'      => $agent_id,
        ],[
            'division_id'   => $request->exdiv_id,
            'city_id'       => $request->excity_id,
        ]);

        if ($request->exarea_ids) {
            $extended->posts()->sync($request->exarea_ids);
        }
    }



    private function delivery($request, $delivery)
    {
        $delivery_id    = $delivery->create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ])->id;
        return $delivery_id;
    }

    private function deliveryUpdate($request, $delivery_id)
    {

        if ($request->password) {
            $delivery_id    = Delivery::findOrFail($delivery_id)->update([
                'name'      =>  $request->name,
                'phone'     =>  $request->phone,
                'email'     =>  $request->email,
                'password'  => Hash::make($request->password),
            ]);
        } else {
            $delivery_id    = Delivery::findOrFail($delivery_id)->update([
                'name'      =>  $request->name,
                'phone'     =>  $request->phone,
                'email'     =>  $request->email,
            ]);
        }

        return $delivery_id;
    }
}
