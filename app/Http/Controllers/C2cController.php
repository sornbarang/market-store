<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesAds as Category ;
use App\Models\ProductsAds as Product;
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
        $data['category']=$this->getParentsCategory(); 
        $tree = Category::roots()->get();
        $getAllNodeByParent=[];
        // foreach($tree as $k => $va){  
        //     $pro= $va->getDescendantsAndSelf();  
        // } 
        foreach($tree as $k => $node){     
            $tree[$k]['children']=$node->getDescendants();
            foreach($node->getDescendants() as $val){
                $tree[$k]['product'] = Product::categorized($val)->get(); 
            }
             
        }  
        $trees=Category::all()->toHierarchy(); 
        foreach($tree as $k=> $val){ 
            if(count($val->children) > 0){ 
                foreach ($val->children as $key => $value) { 
                    $pro = Product::categorized($value)->get();  
                } 
                $tree[$k]['ro']=$pro; 
            }
        }
        // return $tree;
    //     $data['category']=$this->getParentsCategory(); 
    //     $tree = Category::roots()->get();
    //     $getAllNodeByParent=[];
    //     // foreach($tree as $k => $va){  
    //     //     $pro= $va->getDescendantsAndSelf();  
    //     // }
    //     foreach($tree as $k => $node){  
    //         $getAllNodeByParent[]=array('id'=>$node->id,'parent'=>$node->name,'childs'=>$node->getDescendants());
    //     }
    //     $html=[];
    //     foreach($getAllNodeByParent as $key => $val){
    //         foreach($val['childs'] as $getProOfNode){
    //             $pro=Product::categorized($getProOfNode)->get();
    //             if(count($pro) > 0){
    //                 $html[$val['parent']][]=array('id'=>$val['id'],'node'=>$getProOfNode->name,'categories_ads_id'=>$getProOfNode->id,'products'=>$pro);
    //             }else{
    //                 $html[$val['parent']][]=array('id'=>$val['id'],'node'=>$getProOfNode->name,'categories_ads_id'=>$getProOfNode->id,'products'=>[]);
    //             }
    //         } 
    //         $html[$val['parent']][]=array('id'=>$val['id'],'node'=>'','categories_ads_id'=>'','products'=>[]);
    //     }
    //     $totalProOfParent=[];
    //     foreach ($html as $k => $value) {
    //         $count=0; 
    //         foreach ($value as $key => $val) {
    //             $count += count($val['products']);
    //             $totalProOfParent[$k]=array('id'=>$val['id'],'name'=>$k,'count'=>$count);
    //         # code...
    //         }
    //     } 
    //     // return $tree;
    //     // return $totalProOfParent;
        
    //    $data['category']=$totalProOfParent;
        return view('c2c.page.index',compact('data'));
    }  
    function getParentsCategory($id=''){
        if(isset($id) && $id!=''){
            $node = Category::find($id); 
            return $node->getImmediateDescendants();
        }
        return Category::roots()->get();
    }
    public function getDynamicCategory($id,Request $request){
        
        $allcats = Category::all(); 
        $node = Category::find($id); 
        // get each category
        $data['category'] = $node->getImmediateDescendants();
        // get category breadcrump
        $data['bread'] = $node->getAncestorsAndSelf();  
        // current category
        $cnode= $node->getDescendantsAndSelf(); 
        foreach($cnode[0]->translations as $lang){
            if($lang->locale=='en'){
                $curentnode=$lang->name;
            }else{
                $curentnode=$lang->name;
            }
        } 
        $data['cnode'] = $curentnode;
        $catarr=[];
        foreach($allcats as $cat){ 
            $pros = Product::categorized($cat)->get();
            if($cat->isleaf() && count($pros) > 0 ){ 
                $catarr[$cat->name]=['active'=>$cat->id==$id?true:false,'id'=>$cat->id,'name'=>$cat->name,'count'=>count($pros)];
            }
            
        } 
        // return $catarr;
        $data['countcatpro']=$catarr;
        // $category = Category::find($id); 
        // get proudct if category have product
        // check if last child
        if($node->isLeaf()){
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
            $products = Product::categorized($node)->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate($record);
            // return $products;
            if(count($products) > 0){
                $data['product']=$products;
            }
            return view('c2c.page.product',compact('data'));
        }
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
