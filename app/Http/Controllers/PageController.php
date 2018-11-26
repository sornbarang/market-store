<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class PageController extends Controller
{
    /**
     * Show contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'email' => 'required|email',
            ]); 
            if ($validator->fails()) {
                return redirect('contact')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
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
