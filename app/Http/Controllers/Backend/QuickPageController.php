<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Quickpage\QuickpageRequest;
use App\Http\Requests\Quickpage\QuickpageUpdateRequest;
use App\Models\QuickPage;

class QuickPageController extends Controller
{

    public function index()
    {
       $pages = QuickPage::paginate(10);
       return view ('backend.quick-page.index',compact('pages'));
    }

    public function create()
    {
        return view('backend.quick-page.create');
    }

    public function store(QuickpageRequest $request)
    {
        $all = $request->all();
        $all['customer_care'] = $request->has('customer_care');
        QuickPage::create($all);
        return  redirect()
                ->route('backend.site_config.quick.page.index')
                ->with('message', 'Quick Page created Successfully.');

    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $page = QuickPage::find($id);
        return view ('backend.quick-page.edit',compact('page'));
    }


    public function update(QuickpageUpdateRequest $request,QuickPage $quickPage)
    {
        $all = $request->all();
        $all['customer_care'] = $request->has('customer_care');
        $quickPage->update($all);
        return  redirect()->route('backend.site_config.quick.page.index')->with('message', 'Quick Page updated Successfully.');
    }

    public function destroy($id)
    {
       try {
            $page = QuickPage::find($id);
            $page->delete();
       } catch (\Exception $e) {
           return false;
           return back()->with('message', 'Something is Wrong!.');
       }
        return back()->with('error', 'Quick Page deleted Successfully!.');
    }
}
