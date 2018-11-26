<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function getCart(){
        $data['breadcrub']='Shopping Cart';
        return view('shop.cart',compact('data'));
    }

    public function getCheckout(){
        $data['breadcrub']='Checkout';
        return view('shop.checkout',compact('data'));
    }

}
