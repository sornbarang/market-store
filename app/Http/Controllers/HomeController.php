<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view="admin.elements.dashboard";
        return view('admin.index');
    }
    /**
     * Show the application ads.
     *
     * @return \Illuminate\Http\Response
     */
    public function ads()
    {
        $data['cats']=[];
        $view="admin.elements.ads";
        return view('admin.index',compact('view','data'));
    }
}
