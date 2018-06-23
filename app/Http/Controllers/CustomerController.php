<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsAds as Product;
use App\Models\CategoriesAds as Category ;
use PDF;
use App;
use Auth;
use Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['breadcrub']='dashboard';
        return view('customer.dashboard',compact('data'));
    }
    /**
     * Display a listing of the store of user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myStore()
    {

        $data['breadcrub']='store';
        return view('customer.store',compact('data'));
    }
    /**
     * setting of user.
     *
     * @return \Illuminate\Http\Response
     */
    public function mySetting()
    {
        $data['breadcrub']='setting';
        return view('customer.setting',compact('data'));
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
    /**
     * User's profile
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {
        $data['breadcrub']='profile';
        return view('customer.profile',compact('data'));
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myCart()
    {
        $data['breadcrub']='purchase';
        return view('customer.cart',compact('data'));
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myFavorite()
    {
        $data['breadcrub']='favourite';
        return view('customer.favorite',compact('data'));
    }
    /**
     * User's sale management
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mySaleManagement()
    {
        $data['breadcrub']='sale manangement';
        return view('customer.sale-management',compact('data'));
    }
    function getParentsCategory($id=''){
        if(isset($id) && $id!=''){
            return Category::find($id);
        }
        return Category::where('parent_id',null)->get();
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myItemUpload(Request $request) 
    {
        
        
        $data['category'] = $this->getParentsCategory();
        $data['breadcrub']='upload item';

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                // 'body' => 'required',
            ]); 
            if ($validator->fails()) {
                return redirect('market/myitemupload')
                    ->withErrors($validator)
                    ->withInput();
            } 
            $name = $request->name;
            $price = $request->price;
            $discount = $request->discount;
            $active = (int)$request->active ? 1 : 0;
            $description= $request->sumernotehidden;
            // $imgappend=[];
            // dd($imgappend);
            // print_r(Auth::user()->id);exit();
            $product = Product::create([
                'name' => $name,
                'price' => $price,
                'discount' => $discount,
                'active' => $active,
                'user_id'=>Auth::id(),
                // 'image' => isset($imgappend) && !empty($imgappend)?implode(',',$imgappend):'',
                'description'=>$description
                ]);   
                if($product){ 
                    foreach (['en', 'km'] as $locale) {
                        $product->translateOrNew($locale)->name = $name;
                        $product->translateOrNew($locale)->description = $description;
                    }
                    $product->save();
                    // save product to relation table between product and cateogry
                    $newsItem = Product::find($product->id); 
                    $newsItem->categories_ads()->attach($request->lastchildid);
                    // end
                    
                    if($request->hasFile('photos'))
                    {
                        $allowedfileExtension=['jpg','jpeg','png'];
                        $files = $request->file('photos'); 
                        foreach($files as $file){
                            // $filename = $file->getClientOriginalName();
                            $extension = $file->getClientOriginalExtension();
                            $check=in_array($extension,$allowedfileExtension);
                            if($check){
                                // if($check){
                                //     $imgappend[] = $file->store('public'); 
                                // }
                                $newsItem
                                ->addMedia($file)
                                ->withResponsiveImages()
                                ->toMediaCollection();
                            }
                        }
                    }
                    return redirect('market/myitemupload')->with('success', 'Record has been added!');
                }
                return redirect('market/myitemupload')->with('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again!');
        }

        return view('customer.item-upload',compact('data'));
    }

    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myManageItem()
    {
        $data['products'] = Product::where('user_id', Auth::user()->id)->get();
        $data['breadcrub']='manage items';
        return view('customer.manage-item',compact('data'));
    }

    function getLavel(){

    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myEditItem(Request $request, $id)
    {
        $data['category'] = $this->getParentsCategory();  
        if($request->isMethod('post')){
            $product = Product::where('user_id',Auth::id())->find($id);
            if($product){  
                // $node = Category::find($product->categories_ads[0]->id);
                // $lavel=$node->getAncestorsAndSelf();
                // $currentCat=[];
                // foreach($lavel as $p){
                //    $currentCat[]=$p->translate('en')->name;
                // }  
                // check last child have try to delete and new insert
                if(isset($request->lastchildid) && !empty($request->lastchildid)){
                    echo 'have';
                    // delete old category
                    $product->categories_ads()->detach($product->categories_ads[0]->id);
                    // add new category 
                    $product->categories_ads()->attach($request->lastchildid);
                } 
            $allowedfileExtension=['jpg','jpeg','png'];
            // check if have new input file image to update
            if($request->hasFile('photos')){
                $file = $request->file('photos'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    // Storage::move('old/file.jpg',$file->store('public'));
                    // $imgappend[] = $file->store('public');
                    if(null !== $request->get('mediaid') && !empty($request->get('mediaid'))){
                        // $imgappend[] = $file->store('public');
                        $product->deleteMedia((int)$request->get('mediaid'));
                    } 
                    $product
                        ->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection();
                } 
            }
            if($request->hasFile('photos1')){
                $file = $request->file('photos1'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    if(null !== $request->get('mediaid1') && !empty($request->get('mediaid1'))){
                        // $imgappend[] = $file->store('public');
                        $product->deleteMedia((int)$request->get('mediaid1'));
                    } 
                    $product
                        ->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection(); 
                } 
            }
            if($request->hasFile('photos2')){
                $file = $request->file('photos2'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    // $imgappend[] = $file->store('public');
                    if(null !== $request->get('mediaid2') && !empty($request->get('mediaid2'))){
                        // $imgappend[] = $file->store('public');
                        $product->deleteMedia((int)$request->get('mediaid2')); 
                    } 
                   
                    $product
                        ->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection(); 
                } 
            }
            if($request->hasFile('photos3')){
                $file = $request->file('photos3'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){ 
                    if(null !== $request->get('mediaid3') && !empty($request->get('mediaid3'))){
                        $product->deleteMedia((int)$request->get('mediaid3')); 
                    } 
                    $product    
                        ->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection();
                } 
            }
                return redirect('market/mymanageitem')->with('success', 'Record has been updated!');
            }
        }
        $data['breadcrub']='update item';
        $data['product']=Product::where('user_id',Auth::id())->find($id); 
        $currentCat=[];
        $data['clid']='';
        // check if have category in relation
        if(count($data['product']->categories_ads) > 0){
            $data['clid']=$data['product']->categories_ads[0]->id;
            $node = Category::find($data['product']->categories_ads[0]->id);
            // print_r($data['product']->categories_ads[0]->id);exit();
            $lavel=$node->getAncestorsAndSelf();
            foreach($lavel as $p){
                $currentCat[]=$p->translate('en')->name;
            }
        }
        $data['currentcat']=$currentCat;
        // $categories = Category::all()->toHierarchy();
        // foreach($categories as $node){
        //     echo $this->renderNode($node);
        // }
        // $category = Category::find(26);
        // // get the product id's
        // $products = Product::where('id',28)->get();

        // // sync the products inside the categoy with those selected previously
        // $c = $category->products_ads()->sync($products);
        // print_r($c);
        // // print_r($categories);
        return view('customer.edit-item',compact('data'));
    }
    public function renderNode($node) {

        $html = '<ul>';
      
        if( $node->isLeaf() ) {
          $html .= '<li>' . $node->name . '</li>';
        } else {
          $html .= '<li>' . $node->name;
      
          $html .= '<ul>';
              
          foreach($node->children as $child)
            $html .= $this->renderNode($child);
      
          $html .= '</ul>';
      
          $html .= '</li>';
        }
      
        $html .= '</ul>';
      
        return $html;
      }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myInvoice()
    {
        $data['breadcrub']='invoice';
        return view('customer.invoice',compact('data'));
    }
    public function downloadPdf(){ 
        $data['breadcrub']='invoice';
        $pdf = PDF::loadView('customer.pdf',compact('data'));
        return $pdf->download('invoice.pdf'); 
    }
    public function viewPdf(){  
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        $data['breadcrub']='invoice';
        $pdf = PDF::loadView('customer.pdf',compact('data'));
        return $pdf->stream();
    }
}
