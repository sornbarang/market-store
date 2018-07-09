<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsAds as Product;
class SearchController extends Controller
{
    public function filter(Request $request){
        $data['searchpros']=[];
        $data['strsearch']='';
        if($request->searchstr !='' or $request->searchstr != null){
            $data['strsearch']=$request->searchstr;
            $data['searchpros'] = Product::distinct()->search($request->searchstr)
            ->with('user')
            ->paginate(20);
        }else{
            return redirect('market'); 
        }
        $data['breadcrub']='Search products';
        // return $data['searchpros'];
        return view('c2c.page.search',compact('data'));
    }
}
