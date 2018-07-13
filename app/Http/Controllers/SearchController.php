<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsAds as Product;
class SearchController extends Controller
{
    public function filter(Request $request){
        
        $data['searchpros']=[];
        $data['strsearch']='';
        $order='asc';
        $record=25;
        if(isset($request->price) && $request->price=='high'){
            $order='desc';
        }
        if(isset($request->record) && !empty($request->record)){
            if($request->record==12){
                $record=12;
            }else if(isset($request->record) && $request->record==15){
                $record=15;
            }
        }
        $data['product']=[];
        $data['order']=$order;
        $data['record']=$record;
        if($request->searchstr !='' || $request->searchstr != null){
            $data['strsearch']=$request->searchstr;
            $data['searchpros'] = Product::distinct()->search($request->searchstr)
            ->with('user')
            ->orderBy('products_ads.price', $order)
            ->latest('products_ads.id')
            ->paginate($record);
        }else{
            return redirect('market'); 
        }
        $data['breadcrub']='Search products';
        // echo $order;
        // echo $record;exit();
        // return $data['searchpros'];
        return view('c2c.page.search',compact('data'));
    }
}
