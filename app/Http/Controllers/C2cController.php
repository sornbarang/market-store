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
        return view('c2c.page.index',compact('data'));
    } 
    public function renderNode($node) {

        $html = '<ul>';
      
        if( $node->isLeaf() ) {
          $html .= '<li>' . $node->name . '</li>';
        } else {
          $html .= '<li>' . $node->name;
      
          $html .= '<ul>';
              
          foreach($node->children as $child){
            $html .= $this->renderNode($child);
        }
          $html .= '</ul>';
      
          $html .= '</li>';
        }
      
        $html .= '</ul>';
      
        return $html;
      }
    function getParentsCategory($id=''){
        if(isset($id) && $id!=''){
            $node = Category::find($id); 
            return $node->getImmediateDescendants();
        }
        return Category::roots()->get();
    }
    public function getDynamicCategory($id){
        
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
            if(count($pros) > 0){
                $catarr[$cat->name]=['name'=>$cat->name,'count'=>count($pros)];
            }
        } 
        $data['countcatpro']=$catarr;
        // $category = Category::find($id); 
        // get proudct if category have product
        $products = Product::categorized($node)->orderBy('products_ads.id', 'desc')->paginate(20);
        // return $products;
        if(count($products) > 0){
            $data['product']=$products;
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
