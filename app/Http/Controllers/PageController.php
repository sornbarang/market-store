<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $data['breadcrub']='contact';
        return view('contact',compact('data'));
    }
    /**
     * Show term & condiction
     *
     * @return \Illuminate\Http\Response
     */
    public function termcondiction()
    {
        $data['breadcrub']='Terms & Conditions';
        return view('termcondiction',compact('data'));
    }
}
