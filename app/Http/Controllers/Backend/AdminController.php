<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Module;
use App\Permission;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminController extends Controller
{

    public function index()
    {
        $admins = Admin::paginate(10);
        return view('backend.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('backend.admin.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required||min:3|max:50|unique:admins,name',
            'email'     => 'required|email|unique:admins,email',
            'is_super' => 'required',
            'password'  => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        Admin::create($data);
        return  redirect()->route('backend.admin.index')->with('message', 'Admin created successfully!');
    }


    public function edit(Admin $admin)
    {
        return view('backend.admin.edit', compact('admin'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'name'                  => 'required||min:3|max:50|unique:admins,name,' . $id,
            'email'                 => 'required|email|unique:admins,email,' . $id,
            'is_super'              => 'nullable',
            'password'              => 'nullable|confirmed|min:8|different:oldpassword',
            'password_confirmation' => 'nullable|min:8',
            'oldpassword'           =>  ['nullable', function ($attribute, $value, $fail) use ($id) {
                if (!\Hash::check($value, Admin::find($id)->password)) {
                    return $fail('The old password is incorrect.');
                }
            }]

        ]);

        $data   = $request->all();
        $admin  = Admin::find($id);
        if ($request->oldpassword && $request->password) {

            $data['password'] = Hash::make($request->password);

            $admin->update($data);
        } else {
            unset($data['password']);
            $admin->update($data);
        }

        return redirect()->route('backend.admin.index')->with('message', 'Admin Updated successfully!');
    }


    public function destroy(Admin $admin)
    {

        try {
            $admin->delete();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
        return back()->with('message', 'Admin Deleted successfully!');
    }

    public function permission(Admin $admin)
    {

        $admins_permissions = $admin->permissions->pluck('slug')->toArray();
        $modules = Module::with(['submodules' => function ($q) {
            $q->select(['id', 'name', 'module_id']);
        }])->with('submodules.permissions')->orderBy('id')->get();

        return view('backend.admin.permission', compact('modules', 'admin', 'admins_permissions'));
    }

    public function permissionStore(Request $request, $id)
    {
        $ids = $request->permission_ids;
        $admin = Admin::find($id);
        $admin->permissions()->sync($ids);
        return back()->with('message', "Permission Store Successfully.");
    }

    public function search(Request $request)
    {
        $q = $request->search;
        $admins = Admin::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('email', 'LIKE', '%' . $q . '%')
            ->paginate(25);
        return view('backend.admin.index', compact('admins'));
    }
}
