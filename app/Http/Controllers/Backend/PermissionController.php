<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Module;
use App\Permission;
use App\Submodule;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function create()
    {
        return view('backend.permission.create',['modules' => Module::all(),'submodules' => Submodule::all()]);
    }

    public function index()
    {
        return view('backend.permission.index',['permissions' => Permission::orderBy('module_id')->orderBy('submodule_id','DESC')->paginate(500)]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['parent'] = strstr($request->name, ' ', true);
        Permission::create($data);
        return back()->with('message','Permission Name added successfully.');
    }
    public function edit(Permission $permission)
    {
        return view('backend.permission.edit',['permission'=> $permission,'modules' => Module::all(), 'submodules' => Submodule::all(),'permission'=> $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $data = $request->all();
        $data['submodule_id'] = $request->submodule_id;
        $data['parent'] = strstr($request->name, ' ', true);
        $permission->update($data);
        return  back()->with('message','Permission updated successfully.');
    }


    public function destroy(Permission $permission)
    {

        $permission->delete();
        return  back()->with('message','Permission Name added successfully.');
    }


}
