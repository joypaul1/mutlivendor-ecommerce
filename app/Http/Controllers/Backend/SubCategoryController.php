<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subcategories\StoreRequest;
use App\Http\Requests\Subcategories\UpdateRequest;
use NabilAnam\SimpleUpload\SimpleUpload;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category:id,name')->latest()->paginate(20);
        return view('backend.sub_categories.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('backend.sub_categories.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {

        $data           = $request->all();
        $data['image']  = (New SimpleUpload)->file($request->image)
                        ->dirName('subCategories')
                        ->save();

        SubCategory::create($data);

        return redirect()
            ->route('backend.product.sub_categories.index')
            ->with('message', 'Subcategory created successfully!');
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('backend.sub_categories.edit', compact('categories', 'subCategory'));
    }

    public function update(UpdateRequest $request, SubCategory $subCategory)
    {

        $all          = $request->all();
        $all['image'] = (new SimpleUpload)->file($request->image)
            ->dirName('subCategories')
            ->deleteIfExists($subCategory->image)
            ->save();

        $subCategory->update($all);

        return redirect()
            ->route('backend.product.sub_categories.index')
            ->with('message', 'Subcategory updated successfully!');
    }

    public function destroy(SubCategory $subCategory)
    {
        try {
            $subCategory->delete();
        } catch (\Exception $e){
            return redirect()
                ->route('backend.product.sub_categories.index')
                ->with('error', 'Subcategory is referenced in another place!');
        }

        return redirect()
            ->route('backend.product.sub_categories.index')
            ->with('message', 'Subcategory deleted successfully!');
    }
     // ajax
    public function ajaxGetSubCategories($category_id)
    {
        return SubCategory::where('category_id', $category_id)->get(['id', 'name']);
    }

    public function search(Request $request)
    {
        $q = $request->search;
        $subCategories  = SubCategory::where('name', 'LIKE', '%' . $q .'%')->paginate(25);
        return view('backend.sub_categories.index',compact('subCategories'));
    }

}
