<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use App\Models\Collection;
use App\Http\Requests\Collection\StoreRequest;
use App\Http\Requests\Collection\UpdateRequest;
use Illuminate\Http\Request;
use NabilAnam\SimpleUpload\SimpleUpload;

class CollectionController extends Controller
{

    public function index()
    {
        return view('backend.collection.index',[
            'collections' => Collection::paginate(25)
        ]);
    }

    public function create()
    {
        return view('backend.collection.create');
    }


    public function store(StoreRequest $request)
    {
        $data                   = $request->all();
        $data['show_in_home']   = $request->has('show_in_home');
        $data['cover_photo']    = (new SimpleUpload)->file($request->cover_photo)->resizeImage(67,67)->dirName('collection')->save();
        $data['cover_photo_2']  = (new SimpleUpload)->file($request->cover_photo_2)->resizeImage(67,67)->dirName('collection')->save();
        $data['cover_photo_3']  = (new SimpleUpload)->file($request->cover_photo_3)->resizeImage(67,67)->dirName('collection')->save();

        Collection::create($data);

        return redirect()->route('backend.product.collections.index')->with('message', 'Collection Info created successfully!');
    }



    public function edit($id)
    {
        return view('backend.collection.edit', [
            'collection' => Collection::find($id)
        ]);
    }


    public function update(UpdateRequest $request,  Collection $id)
    {
        $coverPhoto     = $request->file('cover_photo');
        $coverPhoto_2   = $request->file('cover_photo_2');
        $coverPhoto_3   = $request->file('cover_photo_3');
        $collection     = Collection::find($request->id);

        if(isset($coverPhoto)){
            $collection['cover_photo'] = (new SimpleUpload)->file($request->cover_photo)->resizeImage(67,67)
                                            ->dirName('collection')->deleteIfExists($collection->cover_photo)->save();
        }
        if(isset($coverPhoto_2)){
            $collection['cover_photo_2'] = (new SimpleUpload)->file($request->cover_photo_2)->resizeImage(67,67)
                                            ->dirName('collection')->deleteIfExists($collection->cover_photo_2)->save();
        }

        if(isset($coverPhoto_3)){
            $collection['cover_photo_3'] = (new SimpleUpload)->file($request->cover_photo_3)->resizeImage(67,67)
                                            ->dirName('collection')->deleteIfExists($collection->cover_photo_3)->save();
        }
        // return $collection;
        $collection->title = $request->title;
        $collection->status = $request->status;
        $collection->show_in_home = $request->has('show_in_home');
        $collection->save();

        return redirect()->route('backend.product.collections.index')->with('Collection Update successfully!');

    }


    public function destroy($id)
    {
        try {
            Collection::where('id', $id)->delete();
        }catch (\Exception $exception){
            return redirect()->route('backend.product.collections.index')->with('message', 'Collection not found!');
        }
        return redirect()
            ->route('backend.product.collections.index')
            ->with('message', 'Collection deleted successfully!');
    }

    public function search(Request $request)
    {
        $data     = $request->search;
        $collections   = Collection::where('title', 'LIKE', '%' . $data .'%')
                    ->paginate(25);

        return view('backend.collection.index',compact('collections'));
    }
}
