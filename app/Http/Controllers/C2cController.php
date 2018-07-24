<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesAds as Category ;
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
        // $data['category']=$this->getParentsCategory(); 
        $tree = Category::roots()->get(); 
        $pro=[]; 
        foreach($tree as $k => $va){  
            if( $va->isRoot()){
                $cat = $va->getImmediateDescendants();
            }else{
                //if not root get self and child
                $cat = $va->getAncestorsAndSelf(); 
            }
            foreach($cat as $node){
                $p=Product::categorized($node)->get();
                if(count($p) > 0){
                    $pro[$va->name]['product'][]= Product::categorized($node)->get();
                }
            }
            $pro[$va->name]['product'][]=[];
            $pro [$va->name]['childreen'][]= $va->getDescendantsAndSelf(1);  
        }  
        // return $pro;
        $data['listcats']=$pro;  
        return view('c2c.page.index',compact('data'));
    }  
    function getParentsCategory($id=''){
        if(isset($id) && $id!=''){
            $node = Category::find($id); 
            return $node->getImmediateDescendants();
        }
        return Category::roots()->get();
    }
    public function getProductOfCategory($id,$type=false){
        $node = Category::find($id);
        // if root get all child 
        if( $node->isRoot()){
            $cat = $node->getImmediateDescendants();
        }else{
            //if not root get self and child
            $cat = $node->getAncestorsAndSelf(); 
        }
        $pros=[];
        foreach($cat as $n){
            $p=Product::categorized($n)->get();
            if(count($p) > 0){
                $pros['product'][]= $p;
            }
        }  
        
        // return $pros;
        
        $finaldatas=[];
        // return $pros;
        if(count($pros) > 0){
            foreach($pros as $vals){ 
                foreach($vals as $val){ 
                    foreach($val as $v){ 
                        $avatar='';  
                        $media = $v->user->profile->getMedia(); 
                        foreach($media as $val){   
                            if($v->user->profile->avatar == $val->id){
                                $avatar=Storage::url($val->id.'/'.$val->file_name);
                            }
                        } 
                        $img='';
                        $newsItem=Product::find($v->products_ads_id); 
                        $mediaItems = $newsItem->getMedia(); 
                        $getFirstMedia = $newsItem->getFirstMedia();  
                        if($getFirstMedia){
                            $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                        } 
                        $v['image']=$img;
                        $v['avatar']=$avatar;
                        $ps[]=$v;
                    } 
                }
                $finaldatas=$ps;
            }
        } 
        if($type){
            return $finaldatas;
        }
        return response()->json($finaldatas);
        // $pros[$node->name]['childreen']= $node->getDescendantsAndSelf(1);   
    }
    public function getDynamicCategory($id,Request $request){  
        $node = Category::find($id); 
        $order='asc';
        $record=25;
        // if(isset($request->price) && $request->price=='high'){
        //     $order='desc';
        // }
        // if(isset($request->record) && !empty($request->record)){
        //     if($request->record==12){
        //         $record=12;
        //     }else if(isset($request->record) && $request->record==15){
        //         $record=15;
        //     }
        // }
        // $data['product']=[];
        $data['order']=$order;
        $data['record']=$record;
        // $products = Product::categorized($node)->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record);
        // // return $products;
        // if(count($products) > 0){
        //     $data['product']=$products;
        // }
        // second param mean return array object
        $data['product']=$this->getProductOfCategory($id,true);
        
        $data['nest'] = Category::all()->toHierarchy();
        return view('c2c.page.product',compact('data'));
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
