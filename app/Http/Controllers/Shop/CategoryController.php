<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoriesAds as Category ;
use App\Models\ProductsAds as Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tree = Category::roots()->get();  
        $pro=[]; 
        foreach($tree as $k => $va){
            // get product of parent limit 7
            $pro[$va->name]['product']=Product::categorized($va)->latest('products_ads.id')->limit(7)->get();
            // get one lavel of parent
            $pro [$va->name]['childreen']= $va->getDescendantsAndSelf(1);
        }
        $data['listcats']=$pro;   
        // return $data['listcats'];
        // loop root category push icon
        foreach($tree as $key => $val){
            if(strtolower($val->name)=='fashion'){
                $tree[$key]['icon'] = 'lnr lnr-shirt';
                $tree[$key]['order'] = 0;
            }elseif(strtolower($val->name)=='technology'){
                $tree[$key]['icon'] = 'fa fa-bolt';
                $tree[$key]['order'] = 1;
            }elseif(strtolower($val->name)=='real estate'){
                $tree[$key]['icon'] = 'lnr lnr-apartment';
                $tree[$key]['order'] = 4;
            }elseif(strtolower($val->name)=='vehicle'){
                $tree[$key]['icon'] = 'lnr lnr-car';
                $tree[$key]['order'] = 5;
            }elseif(strtolower($val->name)=='cosmetic'){
                $tree[$key]['img'] = asset('images/dresser.png');
                $tree[$key]['order'] = 2;
            }elseif(strtolower($val->name)=='other'){
                $tree[$key]['icon'] = 'fa fa-ellipsis-h';
                $tree[$key]['order'] = 6;
            }elseif(strtolower($val->name)=='furniture'){
                $tree[$key]['img'] = asset('images/armchair.png');
                $tree[$key]['order'] = 3;
            }else{
                $tree[$key]['icon'] = 'lnr lnr-rocket';
            }
        }
        $tree = collect($tree)->sortBy('order'); 
        $data['root']=$tree;   
        $data['type']='shop';   
        return view('c2c.page.index',compact('data'));
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
}
