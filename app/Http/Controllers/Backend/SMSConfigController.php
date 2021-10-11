<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SMSConfig;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SMSConfigController extends Controller
{
    public function index(Request $request)
    {
        $allSms = SMSConfig::all();
        return view('backend.sms & email.sms-config', compact('allSms'));
    }


    public function create()
    {
        return view('backend.sms & email.sms-config-create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'username'  => 'required|string',
            'api_key'   => 'required|string',
            'message'   => 'required|string',

        ]);
        try {
            $data['status'] = $request->status == '1'? true: false ;
            $data           = $request->all();
            SMSConfig::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect()->route('backend.sms_config.get')->with('message', 'SMS Config store successfully!');

    }

    public function edit($id)
    {
        $sms = SMSConfig::findOrFail($id);
        return view ('backend.sms & email.sms-config-edit',compact('sms'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'username'  => 'required|string',
            'api_key'   => 'required|string',
            'message'   => 'required|string',

        ]);

        try {
            SMSConfig::updateOrCreate(['id' => $id], [
                'username'      => $request->username,
                'api_key'       => $request->api_key,
                'message'       => $request->message,
                'status'        => $request->status == '1'? true: false ,
            ]);

        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'An unknown error occurred!');
        }
        return back()->with('message', 'SMS Config updated successfully!');
    }

    public function status(Request $request, $id)
    {
        // return response(['success' => $request->status]);
        try {
            $sms = SMSConfig::find($id);
            $sms->status = $request->status === true? 1 : 0 ;
            $sms->save();
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'status' => $e->getMessage()]);
        }
        return response()->json(['success' => 'Status change successfully.' , 'status' => true]);
    }


    public function destroy($id)
    {
        SMSConfig::find($id)->delete();
        return back()->with('message', 'SMS Config Delete successfully!');
    }
}
