<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Banner\BannerUpdateRequest;
use NabilAnam\SimpleUpload\SimpleUpload;
use App\Models\Banner;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::paginate(10);
        // dd($banners);
         return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(BannerRequest $request)
    {
        $all = $request->all();
        $all['image'] = (new SimpleUpload)
            ->file($request->image)
            ->dirName('banners')
            ->save();

        Banner::create($all);

        return back()->with('message', 'Banner Added Successfully!');
    }


    public function status(Request $request ,$banner_id)
    {
        $banner = Banner::find($banner_id);
        $banner->status = $request->status;
        $banner->save();
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit',compact('banner'));

    }


    public function update(BannerUpdateRequest $request, Banner $banner)
    {
        $all = $request->all();
        $all['image'] = (new SimpleUpload)
            ->file($request->image)
            ->dirName('banners')
            ->deleteIfExists($banner->image)
            ->save();

        $all = $banner->update($all);
        return back()->with('message', 'Banner Update Successfully!');
    }


    public function destroy(Banner $banner)
    {
        $banner->delete();

        return back()->with('message', 'Banner Deleted Successfully!');

    }
}
