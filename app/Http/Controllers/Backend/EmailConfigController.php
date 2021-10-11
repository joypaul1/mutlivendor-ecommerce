<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmailConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class EmailConfigController extends Controller
{

    public function index(Request $request)
    {
        $config = EmailConfig::find(1);

        return view('backend.sms & email.email-config', compact('config'));
    }

     
}
