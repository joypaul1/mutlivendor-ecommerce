<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{

    public function index()
    {
        $users = User::paginate(25);
        return view('backend.customer.index',compact('users'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {

        return view('backend.customer.show',['user' => $user]);
    }


    public function edit(User $user)
    {
        return $user;
    }

    public function block(Request $request,$id)
    {
        try
        {
            $user = User::find($id);
            $user->status = $request->status;
            $user->save();
        }
        catch(\Exception $e)
        {
            return response()->json([
                'success' => 'false',
                'errors'  => $e->getMessage(),
            ], 400);
        }
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
          dd($e);
          return redirect()->route('backend.customer.index')->with('message','Sorry! User related Other table.');
        }
        return redirect()->route('backend.customer.index')->with('message','User Deleted Successfully');
    }

    public function search (Request $request)
    {
        $data     = $request->search;
        $users    = User::where('name', 'LIKE', '%' . $data .'%')
                    ->orWhere('mobile', 'LIKE', '%' . $data .'%')
                    ->orWhere('email', 'LIKE', '%' . $data .'%')
                    ->paginate(25);

        return view('backend.customer.index',compact('users'));
    }

    public function subscribe()
    {
        // dd(User::where('subscription', 1)->paginate(20));
       return view('backend.customer.subscriber', ['subscribers'=>User::where('subscription',1)->paginate(20)]) ;
    }

    public function subscribesearch (Request $request)
    {
        $data     = $request->search;
        $users    = User::where('email', 'LIKE', '%' . $data . '%')
                    ->paginate(20);

        return redirect()->route('backend.customer.subscribe', compact('users'));
    }
}
