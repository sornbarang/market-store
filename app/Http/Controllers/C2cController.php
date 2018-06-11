<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
class C2cController extends Controller
{
    public function makeReport()
    {
        $post = Product::find(1);
        $user = Auth::user();
        
        $report=$post->report([
            'reason' => str_random(10),
            'meta' => ['some more optional data, can be notes or something'],
        ], $user);
        $report->conclude([
            'conclusion' => 'Your report was valid. Thanks! We\'ve taken action and removed the entry.',
            'action_taken' => 'Record has been deleted.', // This is optional but can be useful to see what happend to the record
            'meta' => ['some more optional data, can be notes or something'],
        ], $user);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }


    public function index()
    {

        return view('c2c.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcategory()
    {
        return view('c2c.page.category');
    }
    /**
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getproduct()
    {
        return view('c2c.page.product');
    }
    public function getproductdetail()
    {
        return view('c2c.page.singleproduct');
    }
}
