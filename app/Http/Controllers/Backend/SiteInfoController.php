<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteInfo\UpdateRequest;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use NabilAnam\SimpleUpload\SimpleUpload;

class SiteInfoController extends Controller
{
    public function index()
    {
        return view('backend.site_info.index');
    }

    public function update(UpdateRequest $request)
    {
        $request->all();
        $info = SiteInfo::find(1);
        $logo = (new SimpleUpload)->file($request->file('logo'))->dirName('site')->resizeImage(150,50)->deleteIfExists($info->logo)->save();
        $ficon = (new SimpleUpload)->file($request->file('ficon'))->dirName('ficon')->resizeImage(32,32)->deleteIfExists($info->ficon)->save();
        $info->update([
            'logo'          => $logo,
            'ficon'         => $ficon,
            'name'          => $request->name,
            'email'         => $request->email,
            'mobile'        => $request->mobile,
            'address'       => $request->address,
            'short_desc'    => $request->short_desc,
            'title'         => $request->title,
        ]);

        return redirect()->route('backend.site_config.info')->with('message', 'Site Information Updated Successfully');
    }

    public function keyword( )
    {
        return view('backend.site_info.keyword');
    }

    public function keywordupdate(Request $request)
    {

        $info = SiteInfo::first();
        $info->update(['meta_key' => $request->meta_key,'meta_desc' => $request->meta_desc]);
        return redirect()->route('backend.site_config.keyword')
        ->with('message', 'keyword Updated Successfully');
    }

}
