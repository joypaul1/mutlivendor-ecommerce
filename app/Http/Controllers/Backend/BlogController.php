<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Blog;
use NabilAnam\SimpleUpload\SimpleUpload;

class BlogController extends Controller
{
    public function index( )
    {
        return view('backend.blog.index',['blogs' => Blog::paginate(20) ]);
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request, SimpleUpload  $upload)
    {
    	$data 				= $request->all();
        $data['top']        = $request->top == 'on';
    	$data['admin_id'] 	= Auth('admin')->id();

    	$data['large_image'] = $upload
            	->file($request->image)
            	->dirName('short_image')
            	->resizeImage(1162, 700)
            	->save();

        $data['short_image'] = $upload
            	->file($request->image)
            	->dirName('short_image')
            	->resizeImage(370, 270)
            	->save();
      	Blog::create($data);

      	return redirect()->route('backend.blog.index')->with('message', 'Blog Added Successfully!');

    }



     public function edit(Blog $blog)
    {
        return view('backend.blog.edit',compact('blog'));

    }

    public function update(Request $request, SimpleUpload  $upload, Blog $blog)
    {

    	$data 				= $request->all();
    	$data['top'] 		= $request->top == 'on';
    	$data['admin_id'] 	= Auth('admin')->id();

    	$data['large_image'] = $upload
            	->file($request->image)
            	->dirName('short_image')
            	->resizeImage(1162, 700)
            	->deleteIfExists($blog->large_image)
            	->save();

        $data['short_image'] = $upload
            	->file($request->imge)
           	    ->dirName('short_image')
            	->resizeImage(370, 270)
            	->deleteIfExists($blog->short_image)
            	->save();

        $blog->update($data);

      	return redirect()->route('backend.blog.index')->with('message', 'Blog Updated Successfully!');

    }

    public function destroy(Blog $blog)
    {
    	$blog->delete();
    	return redirect()->route('backend.blog.index')->with('message', 'Blog Deleted Successfully!');
    }

    public function search(Request $request)
    {
        $q =  $request->search;
        $blogs    = Blog::where('title', 'LIKE', '%' . $q .'%')
        ->orWhere('description', 'LIKE', '%' . $q .'%')
        ->paginate(25);
        return view('backend.blog.index',compact('blogs'));
    }
}
