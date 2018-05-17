<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Product;
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
        $active = $request->active;
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
                    foreach ($request->photos as $photo) {
                        $imgappend[] = $photo->store('products/admin');
                    } 
                }
                // else{
                //     echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                // }
            }
        }
        Product::create([
            'name' => $name,
            'price' => $price,
            'active' => $active,
            'image' => implode(',',$imgappend),
            'description'=>$description
            ]);
        return redirect()->action('ProductController@index');
        
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
