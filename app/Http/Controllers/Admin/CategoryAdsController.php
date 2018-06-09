<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoriesAds;

class CategoryAdsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoriesAds::get();

        return view('admin.category-ads.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoriesAds::all();
        return view('admin.category-ads.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category = new CategoriesAds();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();

        foreach (['en', 'km'] as $locale) {
            $category->translateOrNew($locale)->name = $request->name;
        }

        $category->save();
        $request->session()->flash('success', 'Category successfully saved.');
        return redirect()->route('admin.category-ads.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = CategoriesAds::all();
        $category = CategoriesAds::findOrFail($id);
        return view('admin.category-ads.edit', compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateCat = CategoriesAds::findOrFail($id);
        $updateCat->translate()->name = $request->name;
        $updateCat->save();
        return redirect()->route('admin.category-ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode(',',$id);
        CategoriesAds::whereIn('id', $ids)->delete();
        return response()->json(['status'=>true]);
    }
}
