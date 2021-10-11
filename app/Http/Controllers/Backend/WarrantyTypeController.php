<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyTypes\StoreRequest;
use App\Http\Requests\WarrantyTypes\UpdateRequest;
use App\Models\WarrantyType;
use Illuminate\Http\Request;

class WarrantyTypeController extends Controller
{
    public function index()
    {
        $types = WarrantyType::latest()->paginate(12);

        return view('backend.warranty-types.index', compact('types'));
    }

    public function create()
    {
        return view('backend.warranty-types.create');
    }

    public function store(StoreRequest $request)
    {
        WarrantyType::create($request->all());

        return redirect()
            ->route('backend.product.warranty-types.index')
            ->with('message', 'Warranty type created successfully!');
    }

    public function edit($id)
    {
        $type = WarrantyType::where('id', $id)->first();
        return view('backend.warranty-types.edit', compact('type'));
    }

    public function update(UpdateRequest $request, $id)
    {
        WarrantyType::where('id', $id)->update($request->except('_token'));

        return redirect()
            ->route('backend.product.warranty-types.index')
            ->with('message', 'Warranty type updated successfully!');
    }

    public function destroy($id)
    {
        try {
            WarrantyType::where('id', $id)->delete();
        } catch (\Exception $e) {
            return redirect()
                ->route('backend.product.warranty-types.index')
                ->with('error', 'Warranty type is referenced in another placewarranty_types!');
        }

        return redirect()
            ->route('backend.product.warranty-types.index')
            ->with('message', 'Warranty type deleted successfully!');
    }

    public function search(Request $request)
    {
        $q = $request->search;
        $types  = WarrantyType::where('name', 'LIKE', '%' . $q . '%')->paginate(25);
        return view('backend.warranty-types.index', compact('types'));
    }
}
