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
            }elseif(strtolower($val->name)=='technology'){
                $tree[$key]['icon'] = 'lnr lnr-laptop-phone';
            }elseif(strtolower($val->name)=='real estate'){
                $tree[$key]['icon'] = 'lnr lnr-apartment';
            }elseif(strtolower($val->name)=='vehicle'){
                $tree[$key]['icon'] = 'lnr lnr-car';
            }elseif(strtolower($val->name)=='cosmetic'){
                $tree[$key]['icon'] = 'lnr lnr-diamond';
            }elseif(strtolower($val->name)=='other'){
                $tree[$key]['icon'] = 'lnr lnr-warning';
            }elseif(strtolower($val->name)=='furniture'){
                $tree[$key]['icon'] = 'fa fa-bed';
            }else{
                $tree[$key]['icon'] = 'lnr lnr-rocket';
            }
        }
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
    public function getProductOfCategory(CategoryTranslate $slug){
        $node = Category::findOrFail($slug->categories_ads_id); 
        $pros=Product::categorized($node)->latest('products_ads.id')->limit(7)->get();
        foreach($pros as $key => $val){ 
            // get media 
            $newsItem=Product::find($val->products_ads_id); 
            $mediaItems = $newsItem->getMedia(); 
            $getFirstMedia = $newsItem->getFirstMedia();   
            if($getFirstMedia){
                $pros[$key]['image']= Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
            } 
            // get avatar
            $media = $val->user->profile->getMedia(); 
            foreach($media as $m){   
                if($val->user->profile->avatar == $m->id){
                    $pros[$key]['avatar']=Storage::url($m->id.'/'.$m->file_name);  
                }
            }
            $pros[$key]['rateavg']=$val->averageRating();
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
            $data['product']=Product::categorized()->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record);
        }else{
            // get all product->orderBy('products_ads.price', $order)
            $data['product']=Product::categorized()->latest('products_ads.id')->paginate($record);                
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
        $data['bread']=$node->getAncestorsAndSelf();
        $slugName=$node->getRoot()->slug;
        $data['cnode']=$node->id; 
        $data['cnodeName']=$node->name;  
        $data['order']=$order;
        $data['record']=$record; 
        if($order !=''){
            // get all product
            $data['product']=Product::categorized($node)->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record); 
        }else{
            // get all product->orderBy('products_ads.price', $order)
            $data['product']=Product::categorized($node)->latest('products_ads.id')->paginate($record);       
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
