<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.dashboard');
    }
    /**
     * Display a listing of the store of user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myStore()
    {
        return view('customer.store');
    }
    /**
     * setting of user.
     *
     * @return \Illuminate\Http\Response
     */
    public function mySetting()
    {
        return view('customer.setting');
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
     * User's profile
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {
        return view('customer.profile');
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myCart()
    {
        return view('customer.cart');
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myFavorite()
    {
        return view('customer.favorite');
    }
    /**
     * User's sale management
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mySaleManagement()
    {
        return view('customer.sale-management');
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myItemUpload()
    {
        return view('customer.item-upload');
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myManageItem()
    {
        return view('customer.manage-item');
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myEditItem()
    {
        return view('customer.edit-item');
    }
}
