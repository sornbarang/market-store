<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesAds as Category ;
use App\Models\CategoriesAdsTranslation as CategoryTranslate ;
use App\Models\ProductsAds as Product;
use Storage;
class C2cController extends Controller
{
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
        $tree = Category::roots()->get();  
        $pro=[]; 
        foreach($tree as $k => $va){
            // get product of parent limit 7
            $pro[$va->name]['product']=Product::has('user.profile')->categorized($va)->latest('products_ads.id')->limit(7)->get();
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
        return view('c2c.page.index',compact('data'));
    }  
    function getParentsCategory($id=''){
        if(isset($id) && $id!=''){
            $node = Category::findOrFail($id); 
            return $node->getImmediateDescendants();
        }
        return Category::roots()->get();
    }
    public function getProductOfCategory(CategoryTranslate $slug,Request $request){
        $node = Category::findOrFail($slug->categories_ads_id); 
        $cats['product']=Product::has('user.profile')->categorized($node)->latest('products_ads.id')->limit(7)->get();
        if ($request->ajax()) {
            return view('elements.home-product', compact('cats'));
        }
        return response()->json($pros);   
    }
    public function getAllCategory(Request $request){
        // return $slug->categories_ads_id;
        // get all category with tree relate with app/helpers.php 
        $data['nest'] = Category::all()->toHierarchy();
        $order='';
        $record=9;
        if(isset($request->price) && $request->price=='high'){
            $order='desc';
        }elseif(isset($request->price) && $request->price=='low'){
            $order='asc';
        }
        if(isset($request->record) && !empty($request->record)){
            if($request->record==12){
                $record=12;
            }else if(isset($request->record) && $request->record==15){
                $record=15;
            }else if(isset($request->record) && $request->record==25){
                $record=25;
            }
        }
        if($order !=''){
            // get all product
            $data['product']=Product::has('user.profile')->categorized()->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record);
        }else{
            // get all product->orderBy('products_ads.price', $order)
            $data['product']=Product::has('user.profile')->categorized()->latest('products_ads.id')->paginate($record);                
        } 
        $data['order']=$order;
        $data['record']=$record;
        return view('c2c.page.product',compact('data'));
    }
    public function getSlugCategory(Request $request,CategoryTranslate $slug){
        
        // return $slug->categories_ads_id;
        // get all category with tree relate with app/helpers.php 
        $data['nest'] = Category::all()->toHierarchy();
        $order='';
        $record=9;
        if(isset($request->price) && $request->price=='high'){
            $order='desc';
        }elseif(isset($request->price) && $request->price=='low'){
            $order='asc';
        }
        if(isset($request->record) && !empty($request->record)){
            if($request->record==12){
                $record=12;
            }else if(isset($request->record) && $request->record==15){
                $record=15;
            }else if(isset($request->record) && $request->record==25){
                $record=25;
            }
        }  
        $node = Category::findOrFail($slug->categories_ads_id); 
        $data['cnode']=$node->id; 
        $data['cnodeName']=$node->name; 
        if ($request->ajax()) {    
            // get all product->orderBy('products_ads.price', $order)
            if(isset($request->from) && isset($request->to)){
                $data['product']=Product::has('user.profile')->categorized($node)->whereBetween('price', [$request->from, $request->to])->paginate($record);   
            }else{
                $data['product']=Product::has('user.profile')->categorized($node)->latest('products_ads.id')->paginate($record);   
            }
            return \Response::json(\View::make('elements.product',compact('data'))->render());
        }  
        $data['bread']=$node->getAncestorsAndSelf();
        $slugName=$node->getRoot()->slug; 
        $data['order']=$order;
        $data['record']=$record; 
        if($order !=''){
            // get all product
            $data['product']=Product::has('user.profile')->categorized($node)->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record); 
        }else{
            // get all product->orderBy('products_ads.price', $order)
            $data['product']=Product::has('user.profile')->categorized($node)->latest('products_ads.id')->paginate($record);       
        } 
        return view('c2c.page.product',compact('data','slugName'));
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
