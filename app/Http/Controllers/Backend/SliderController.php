<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Slider\SliderRequest;
use App\Http\Requests\Slider\SliderUpdateRequest;
use App\Models\Slider;
use NabilAnam\SimpleUpload\SimpleUpload;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::paginate(10);
         return view('backend.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }
    public function store(SliderRequest $request)
    {
        $image = (new SimpleUpload)
            ->file($request->image)
            ->dirName('sliders')
            ->save();

        Slider::create([
            'position'=> $request->position,
            'short_desc'=> $request->short_desc,
            'offer_desc' => $request->offer_desc,
            'color' =>$request->color,
            'link' => $request->link,
            'image' => $image
        ]);

        return redirect()->route('backend.site_config.slider.store')->with('message', 'Slider Added Successfully!');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $slider  = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));

    }

    public function update(SliderUpdateRequest $request,Slider $slider)
    {
       $all = $request->all();

        $all['image'] = (new SimpleUpload)
            ->file($request->image)
            ->dirName('sliders')
            ->deleteIfExists($slider->image)
            ->save();
        $all = $slider->update($all);
        return back()->with('message', 'Slider Update Successfully!');
    }


    public function destroy(Slider $slider)
    {
         $slider->delete();
        return back()->with('message', 'Slider Deleted Successfully!');
    }
}
