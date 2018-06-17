<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request; 
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

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
            return redirect('admin/product')->with('success', 'Record has been added!');
        } 
       
        return redirect('admin/product')->with('error', 'Oh snap! Change a few things up and try submitting again!');
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
        $product->getFirstMedia();
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
                    // $imgappend[] = $file->store('public');
                    if(null !== $request->get('mediaid') && !empty($request->get('mediaid'))){
                        // $imgappend[] = $file->store('public');
                        $product->deleteMedia((int)$request->get('mediaid'));
                    } 
                    $product
                        ->addMedia($file)
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
                        ->toMediaCollection();
                } 
            }
            $product->name = $name;
            $product->price = $price;
            $product->active = $active;
            $product->description = $description;
            // $product->image =isset($imgappend) && !empty($imgappend)?implode(',',$imgappend):'';
            $product->save();
            if($product){
                return redirect('admin/product')->with('success', 'Record has been updated!');
            }
        } 
        return redirect('admin/product')->with('error', 'Oh snap! Change a few things up and try submitting again!');
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
        if($res){
            foreach($res as $val){
                // Storage::delete(explode(',',$val->image));
                $val->delete(); // all associated files will be deleted as well
            }
            Product::whereIn('id',explode(',',$id))->delete();
            return response()->json(['status'=>true]);
        }
        return response()->json(['status'=>false]);
    }
    /**
     * Remove media
     */
    public function deleteMedia(Request $request)
    { 
        if($request->isMethod('post')){
            $product=Product::find($request->pid);  
            if($product){
                try {
                    $product->deleteMedia((int)$request->get('mid')); 
                    return response()->json(['status'=>true]); 
                } catch (Exception $e) { 

                    return response()->json(['status'=>false,'error'=>$e]); 
                }  
            }
            return response()->json(['status'=>false]);
        }
    }
    public function publish(Request $request)
    {
        $product=Product::find($request->pid); 
        if($product){
            try {
                $product->active = $request->get('active');
                $product->save();
                return response()->json(['status'=>true]);
            } catch (Exception $e) { 
                return response()->json(['status'=>false,'error'=>$e]); 
            } 
        }
        return response()->json(['status'=>false]);
    }
}
