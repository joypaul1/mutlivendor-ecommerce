<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Module;
use App\Submodule;
use Illuminate\Http\Request;

class PermissionSubModuleController extends Controller
{

    public function index()
    {
        return view('backend.submodule.index',['submodules' => Submodule::has('module')->with('module')->paginate(50)]);
    }

    public function create()
    {
        return  view('backend.submodule.create',['modules' => Module::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Submodule::create($data);
        return  redirect()->route('backend.submodule.index')->with('message','Module store Successfully.');
    }

    public function edit(Submodule $submodule)
    {
        return view('backend.submodule.edit', ['submodule' => $submodule, 'modules' => Module::all()] );
    }


    public function update(Request $request,Submodule $submodule )
    {
        $data = $request->all();
        $submodule->update($data);
        return  redirect()->route('backend.submodule.index')->with('message','Module updated Successfully.');
    }

    public function destroy(Submodule $submodule )
    {
        $submodule->delete();
        return back()->with('message','Module Deleted Successfully.');
    }
}
