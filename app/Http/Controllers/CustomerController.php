<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use PDF;
use App;

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
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myItemUpload(Request $request) 
    {
        // $category = Category::roots()->first();
        // $product = Product::find(1);
        // $product->categories()->attach($category);
        $data['breadcrub']='upload item';
        if($request->isMethod('post')){
            $name = $request->name;
            $price = $request->price;
            $active = (int)$request->active??0;
            $description= $request->sumernotehidden;
            // $imgappend=[];
            // dd($imgappend);
            $product = Product::create([
                'name' => $name,
                'price' => $price,
                'active' => $active,
                // 'image' => isset($imgappend) && !empty($imgappend)?implode(',',$imgappend):'',
                'description'=>$description
                ]);
                if($product){
                    $newsItem = Product::find($product->id);
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
                                ->toMediaCollection();
                            }
                        }
                    }
                    return redirect('market/mymanageitem')->with('success', 'Record has been added!');
                }
                return redirect('market/mymanageitem')->with('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again!');
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
        $data['breadcrub']='manage items';
        return view('customer.manage-item',compact('data'));
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myEditItem()
    {
        $data['breadcrub']='update item';
        return view('customer.edit-item',compact('data'));
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
