<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsAds as Product;
class SearchController extends Controller
{
    public function filter(Request $request){
        
        $data['searchpros']=[]; 
        $order='asc';
        $record=9;
        $query = Product::distinct()->with('user');
        if (isset($request->price))
        {
            if($request->price=='high'){
                $order = 'desc';
            }
            $query = $query->orderBy('products_ads.price',$order); 
        } 
        if(isset($request->record) && !empty($request->record)){
            if($request->record==12){  
                $record=9;
            }else if(isset($request->record) && $request->record==15){ 
                $record=15;
            }else if(isset($request->record) && $request->record==25){ 
                $record=25;
            }
        }
        if(isset($request->searchstr) && !empty($request->searchstr)){
            $query = $query->search($request->searchstr);
        }
        if(isset($request->from) && !empty($request->to)){
            $query = $query->whereBetween('products_ads.price', [$request->from, $request->to]);
        }
        // return $query->toSql();
        $data['product']=[];
        $data['order']=$order;
        $data['record']=$record;  
        if ($request->ajax()) {     
            $data['searchpros']=$query->paginate($record);
            return \Response::json(\View::make('elements.search-items',compact('data'))->render());
        }  
        $data['searchpros']=$query->latest('products_ads.id')->paginate($record);
        $data['breadcrub']='Search products'; 
        return view('c2c.page.search',compact('data'));
    }
}
