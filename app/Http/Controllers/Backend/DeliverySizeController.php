<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DeliverySize;
use Illuminate\Http\Request;

class DeliverySizeController extends Controller
{
    public function index()
    {
        $sizes = DeliverySize::paginate(12);

        return view('backend.econfig.delivery-size.index', compact('sizes'));
    }

    public function create()
    {
        return view('backend.econfig.delivery-size.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'agent_dhaka' => 'lte:customer_dhaka',
            'agent_other' => 'lte:customer_other',
        ], [
            'agent_dhaka.lte' => 'Must be equal or lower than customer charge dhaka',
            'agent_other.lte' => 'Must be equal or lower than customer charge outside',
        ]);

        DeliverySize::create($request->except('_token'));

        return redirect()->route('backend.econfig.delivery-size.index')->with('message', 'Size created successfully!');
    }

    public function edit($id)
    {
        $size = DeliverySize::find($id);

        return view('backend.econfig.delivery-size.edit', compact('size'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'agent_dhaka' => 'lte:customer_dhaka',
            'agent_other' => 'lte:customer_other',
        ], [
            'agent_dhaka.lte' => 'Must be equal or lower than customer charge dhaka',
            'agent_other.lte' => 'Must be equal or lower than customer charge outside',
        ]);

        DeliverySize::where('id', $id)->update($request->except('_token'));

        return redirect()->route('backend.econfig.delivery-size.index')->with('message', 'Size updated successfully');
    }

    public function destroy($id)
    {
        DeliverySize::destroy($id);

        return redirect()->route('backend.econfig.delivery-size.index')->with('message', 'Size deleted successfully!');
    }
}
