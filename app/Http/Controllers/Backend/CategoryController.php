<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreRequest;
use App\Http\Requests\Categories\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use NabilAnam\SimpleUpload\SimpleUpload;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(20);

        return view('backend.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(StoreRequest $request, SimpleUpload $upload)
    {
        try {
            $all = $request->all();
            $all['show_on_top'] = $request->show_on_top === 'on';
            $all['image'] = $upload
                ->file($request->image)
                ->file($request->image)
                ->resizeImage(1140, 290)
                ->save();
            // $all['thumbnail_image'] = $upload
            //                 ->dirName('category_thumbs')
            //                 ->resizeImage(60, 60)
            //                 ->save();

            Category::create($all);
        } catch (\Exception $e) {
            dd($e->getMessage());

        }

        return redirect()
            ->route('backend.product.categories.index')
            ->with('message', 'Category created successfully!');
    }

    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
       try {
            $upload = new SimpleUpload;
            $all = $request->all();
            $all['show_on_top'] = $request->show_on_top == 'on';
            $all['image'] = $upload
                            ->file($request->image)
                            ->dirName('categories')
                            ->resizeImage(1140, 290)
                            ->deleteIfExists($category->image)
                            ->save();

            $category->update($all);
       } catch (\Exception $e) {
            dd($e);
       }

        return redirect()->route('backend.product.categories.index')->with('message', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (\Exception $e){
            return redirect()
                ->route('backend.product.categories.index')
                ->with('error', 'Category is referenced in another place!');
        }

        return redirect()
            ->route('backend.product.categories.index')
            ->with('message', 'Category deleted successfully!');
    }


    public function search(Request $request)
    {
        $q = $request->search;
        $categories  = Category::where('name', 'LIKE', '%' . $q .'%')->paginate(25);
        return view('backend.categories.index',compact('categories'));
    }
}
