<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Division;
use App\Models\PostCode;
use Illuminate\Http\Request;
use DB;

class PostCodeController extends Controller
{
    public function getCity($divId)
    {
        $data = City::where('division_id', $divId)->get();
        return json_encode($data);
    }


    public function index()
    {
        return view('backend.area.post_code.index', [
            'postCodes' => PostCode::with('division', 'city')->paginate(20)
        ]);
    }

    public function create()
    {
        return view('backend.area.post_code.create', [
            'divisions' => Division::all()
        ]);
    }

    public function store(Request $request)
    {
        PostCode::create($request->all());
        return redirect()
            ->route('backend.area.post_code.index')
            ->with('message', 'Post-Code created successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id = null)
    {
        return view('backend.area.post_code.edit', [
            'divisions' => Division::all(),
            'postCode'  => PostCode::find($id),
            'allCity' => City::all()

        ]);
    }

    public function update(Request $request, PostCode $id)
    {
        $id->update($request->all());
        return redirect()
            ->route('backend.area.post_code.index')
            ->with('message', 'post-code updated successfully!');
    }

    public function destroy($id)
    {
        try {
            PostCode::where('id', $id)->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('backend.area.post_code.index')
                ->with('message', 'Post-code not found!');
        }
        return redirect()
            ->route('backend.area.post_code.index')
            ->with('message', 'Post-code deleted successfully!');
    }

    public function search(Request $request)
    {
        $q          =  $request->search;
        $postCodes  = PostCode::where('name', 'LIKE', '%' . $q . '%')->with('division', 'city')->paginate(20);
        return view('backend.area.post_code.index', compact('postCodes'));
    }
}
