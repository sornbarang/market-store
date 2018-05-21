<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Product;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']= Product::get();
        $data['active']= 'product';
        $view="admin.products.index";
        return view('admin.index',compact('view','data'));
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
    public function store(Request $request){
        $name = $request->name;
        $price = $request->price;
        $active = (int)$request->active??0;
        $description= $request->sumernotehidden;
        $imgappend=[];
        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['jpg','jpeg','png'];
            $files = $request->file('photos'); 
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    if($check){
                        $imgappend[] = $file->store('public'); 
                    }
                }
            }
        }
        // dd($imgappend);
        $product = Product::create([
            'name' => $name,
            'price' => $price,
            'active' => $active,
            'image' => isset($imgappend) && !empty($imgappend)?implode(',',$imgappend):'',
            'description'=>$description
            ]);
        if($product){
            return redirect()->action('ProductController@index')->with('succeess', 'Record has been added!');
        } 
       
        return redirect()->action('ProductController@index')->with('error', 'Oh snap! Change a few things up and try submitting again!');
        // if ($request->hasFile('photos')) {  
        //     foreach($request->file('photos') as $image)
        //     {
        //         // print_r($image->getClientOriginalName());
        //         $path = $request->file('photos')->store('products/admin'); 
        //         return response()->json(['success'=>$path]);
        //     }
           
        // }
        // return redirect()->action('ProductController@index');
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
        $product= Product::find($id);
        if($product){
            return response()->json(['status'=>true,'data'=>$product]);   
        }
        return response()->json(['status'=>false,'data'=>[]]);
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
        $product = Product::find($id);
        
        if($product){
            $imgs = explode(',',$product->image); 
            $name = $request->name??'';
            $price = $request->price??0;
            $active = (int)$request->active??0;
            $description= $request->sumernotehidden??'';
            $imgappend=[]; 
            $allowedfileExtension=['jpg','jpeg','png'];
            // check if have new input file image to update
            if($request->hasFile('photos')){
                $file = $request->file('photos'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    // Storage::move('old/file.jpg',$file->store('public'));
                    $imgappend[] = $file->store('public'); 
                } 
            }else{
                // get default image 
                if(isset($imgs[0])){
                    $imgappend[] = $imgs[0];
                }
            }
            if($request->hasFile('photos1')){
                $file = $request->file('photos1'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $imgappend[] = $file->store('public'); 
                } 
            }else{
                if(isset($imgs[1])){
                    $imgappend[] = $imgs[1];
                }
            }
            if($request->hasFile('photos2')){
                $file = $request->file('photos2'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $imgappend[] = $file->store('public'); 
                } 
            }else{
                if(isset($imgs[2])){
                    $imgappend[] = $imgs[2];
                }
            }
            if($request->hasFile('photos3')){
                $file = $request->file('photos3'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $imgappend[] = $file->store('public'); 
                } 
            }else{
                if(isset($imgs[3])){
                    $imgappend[] = $imgs[3];
                } 
            }  
            $product->name = $name;
            $product->price = $price;
            $product->active = $active;
            $product->description = $description;
            $product->image =isset($imgappend) && !empty($imgappend)?implode(',',$imgappend):'';
            $product->save();
            if($product){
                return redirect()->action('ProductController@index')->with('succeess', 'Record has been updated!');
            }
        } 
        return redirect()->action('ProductController@index')->with('succeess', 'Record has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Product::whereIn('id',explode(',',$id))->get(); 
        // $res=Product::whereIn('id',explode(',',$id))->delete();
        
        if($res){
            foreach($res as $val){
                Storage::delete(explode(',',$val->image));
            }
            Product::whereIn('id',explode(',',$id))->delete();
            return response()->json(['status'=>true]);
        }
        return response()->json(['status'=>true]);
    }
}
