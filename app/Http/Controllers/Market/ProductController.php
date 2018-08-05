<?php

namespace App\Http\Controllers\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductsAds as Product;
use App\Models\CategoriesAds as Category ;
use App\Models\Role;
use Auth;
use willvincent\Rateable\Rating;
class ProductController extends Controller
{
    public function makeReport( Request $request)
    {
        $post = Product::find($request->id);
        $user = Auth::user(); 
        $report=$post->report([
            'reason' => $request->reason,
            'meta' => $request->commemnt_reporter,
        ], $user);
        $report->conclude([
            'conclusion' => 'Your report was valid. Thanks! We\'ve taken action and removed the entry.',
            'action_taken' => 'Record has been deleted.', // This is optional but can be useful to see what happend to the record
            'meta' => ['some more optional data, can be notes or something'],
        ], $user);
        if($report){
            return response()->json([
                'status' => 200,
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'fail'
        ]);
    }
    public function makeRateAble(Request $request){ 
        $post = Product::findOrFail($request->id);
        $rating = new Rating;
        $rating->rating = $request->rate;
        $rating->user_id = Auth::id();

        $post->ratings()->save($rating);
        if($post){
            return response()->json([
                'status' => 200,
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'fail'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
     public function getcategory()
     {
         return view('c2c.page.category');
     }
     /**
      * Display a listing of the category.
      *
      * @return \Illuminate\Http\Response
      */
     public function getproduct()
     {
         return view('c2c.page.product');
     }
     public function getproductdetail($id)
     {  
        $post = Product::findOrFail($id);
        $node = Category::find($post->categories_ads[0]->id);
        $data['bread'] = $node->getAncestorsAndSelf();  
        $data['cnode']=$node->id; 
        if($post->user_id !=null){ 
            $data['relateProByUser'] = Product::where('user_id',$post->user_id)->latest()->limit(7)->get();  
        }if($post){
            $data['product']=$post;
        }
        $data['breadcrub']='Product Detail';
        return view('c2c.page.singleproduct',compact('data'));
     }
}
