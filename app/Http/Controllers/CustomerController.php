<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsAds as Product;
use App\Models\ProductsAdsTranslation as ProductTranslate;
use App\Models\CategoriesAds as Category;
use App\Models\User;
use App\Models\Profile;
use PDF;
use App;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash; 
use Spatie\Image\Image;
use Spatie\Image\Manipulations;
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
    public function myStore($id)
    {
        $isFollowed=false;
        $user= User::findOrFail($id);
        $post= Product::where('user_id',$id)->latest()->paginate(9);
        $getAllPro= Product::where('user_id',$id)->get();
        $totalstar=0;
        foreach($getAllPro as $key => $val){
            $totalstar +=$val->sumRating;
        } 
        $data['totalRate'] =$totalstar;
        if($user){
            $data['user']=$user;
        }
        if($post){
            $data['product']=$post;
        }
        if (Auth::check()) { 
            $isFollowed = $user->isFollowedBy(Auth::user());
        }
        $data['totalFollower']=$user->followers()->count()??0;
        $data['isFollowed'] = $isFollowed; 
        $data['breadcrub']='store';
        $data['totalProducts']=Product::where('user_id',$id)->count();
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
        $allowedfileExtension=['jpg','jpeg','png'];
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required',
            'profile'=>'mimes:jpg,jpeg,png|dimensions:min_width=100,min_height=100',
            'cover'=>'mimes:jpg,jpeg,png|dimensions:min_width=800,min_height=370'
            // 'password' => 'required|confirmed|min:6'
        ]); 
        if ($validator->fails()) {
            return redirect('market/mysetting')
                ->withErrors($validator)
                ->withInput();
        } 
        // echo $request->name;exit();
        $user = User::findOrFail($id);
        if($user){  
            $profile = Profile::where('user_id',$user->id)->first();
            //  check if user profile doen't exist
            if(!$profile){
                $profile = new Profile;
                $profile->location = 'Phnom Penh';
                $profile->user_id =$user->id;
                $profile->save();
            }
            // check if have new input file image to update
            if($request->hasFile('profile')){ 
                $file = $request->file('profile'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){ 
                    if(null !== $request->get('mediaavatarid') && !empty($request->get('mediaavatarid'))){ 
                        $profile->deleteMedia((int)$request->get('mediaavatarid'));
                    } 
                    $avatar = $profile
                        ->addMedia($file) 
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection(); 
                        $cropPath = storage_path('app/public/'.$avatar->id.'/avatar.png'); 
                        $cropPath100 = storage_path('app/public/'.$avatar->id.'/avatar100.png'); 
                        Image::load($avatar->getPath())
                        ->fit(Manipulations::FIT_CROP, 50, 50)
                        ->format(Manipulations::FORMAT_PNG)
                        ->save($cropPath);
                        Image::load($avatar->getPath())
                        ->fit(Manipulations::FIT_CROP, 100, 100)
                        ->format(Manipulations::FORMAT_PNG)
                        ->save($cropPath100);
                    // $this->mediaconvert($media); 
                } 
            }
            if($request->hasFile('cover')){
                $file = $request->file('cover'); 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){ 
                    if(null !== $request->get('mediacoverid') && !empty($request->get('mediacoverid'))){ 
                        $profile->deleteMedia((int)$request->get('mediacoverid'));
                    } 
                    $cover = $profile
                        ->addMedia($file) 
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection();
                        $cropPath = storage_path('app/public/'.$cover->id.'/cover.png'); 
                        Image::load($cover->getPath())
                        ->fit(Manipulations::FIT_CROP, 800, 370)
                        ->format(Manipulations::FORMAT_PNG)
                        ->save($cropPath);
                    // $this->mediaconvert($media); 
                } 
            }
            $user->name = $request->name??'';
            $user->first_name = $request->firstname??'';
            $user->last_name = $request->lastname??'';
            $user->slug = $request->name??'';
            if( ! $request->password == ''){
                $user->password=$request->password;
            }
            // dd( $request->location);
            $user->profile()->update([
                'phone' => $request->phone,
                'location' => $request->location,
                'bio' => $request->author_bio,
                'facebook_link' => $request->facebook??'',
                'twitter_link' => $request->twitter??'',
                'instagram_link' => $request->instagram??'',
                'avatar'=>isset($avatar->id) && !empty($avatar->id)?$avatar->id:$profile->avatar,
                'cover_image'=>isset($cover->id) && !empty($cover->id)?$cover->id:$profile->cover_image,
            ]);
            $user->save();  
            if($user){
                return redirect('market/mysetting')->with('success', 'Record has been update!'); 
            }
            return redirect('market/mysetting')->with('error', 'Problem with update profile!');
        }
        return redirect('market/mysetting')->with('error', 'Problem with update profile!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function myDeletePro(ProductTranslate $slug){
        $id = $slug->products_ads_id; 
        $product = Product::findOrFail($id); 
        $media = $product->getMedia(); 
        if($product){
            if(count($media) > 0){
                foreach($media as $val){
                    $product->deleteMedia((int)$val->id);
                }
            }
            $product->delete();
            return redirect('market/mymanageitem')->with('success', 'Record has been deleted');
        }
        return redirect('market/mymanageitem')->with('error', 'Problem with delete record!');
    }
    /**
     * User's profile
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    { 
        $post = Product::where('user_id',Auth::id())->get();
        $totalstar=0;
        foreach($post as $key => $val){
            $totalstar +=$val->sumRating;
        } 
        $data['totalRate'] =$totalstar;
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
            return Category::findOrFail($id);
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
                'photos' => 'required', 
                // 'photos.*' => 'mimes:jpg,jpeg,png|dimensions:min_width=750,min_height=430'
                'photos.*' => 'mimes:jpg,jpeg,png'
            ]); 
            if ($validator->fails()) {
                return redirect('market/myitemupload')
                    ->withErrors($validator)
                    ->withInput();
            } 
            $name = $request->name;
            $price = is_numeric($request->price)?$request->price:0;
            $discount = is_numeric($request->discount)?$request->discount:0;
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
                    $newsItem = Product::findOrFail($product->id); 
                    $newsItem->categories_ads()->attach($request->lastchildid);
                    // end
                    
                    if($request->hasFile('photos'))
                    {
                        $allowedfileExtension=['jpg','jpeg','png'];
                        $files = $request->file('photos'); 
                        foreach($files as $file){
                            $filename = $file->getClientOriginalName();
                            $extension = $file->getClientOriginalExtension(); 
                            $check=in_array($extension,$allowedfileExtension);
                            if($check){
                                // if($check){
                                //     $imgappend[] = $file->store('public'); 
                                // }
                                $media = $newsItem
                                ->addMedia($file)
                                ->sanitizingFileName(function($filename) {
                                    return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                                 })
                                ->toMediaCollection(); 
                                $this->mediaconvert($media);
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
    public function myManageItem(Request $request)
    {
        $order=''; 
        if(isset($request->price) && $request->price=='high'){
            $order='desc';
        }elseif(isset($request->price) && $request->price=='low'){
            $order='asc'; 
        }
        $data['order']=$order; 
        if($order){
            $data['products'] = Product::where('user_id', Auth::user()->id)->orderBy('products_ads.price', $order)->latest('products_ads.id')->paginate(9);
        }else{
            $data['products'] = Product::where('user_id', Auth::user()->id)->latest('products_ads.id')->paginate(9);
        }
        $data['breadcrub']='manage items';
        return view('customer.manage-item',compact('data'));
    }
    /**
     * User's card
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myEditItem(Request $request,ProductTranslate $slug)
    {  
        $id=$slug->products_ads_id;
        $data['category'] = $this->getParentsCategory();  
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100', 
                // 'photos' => 'mimes:jpg,jpeg,png|dimensions:min_width=750,min_height=430',
                // 'photos2' => 'mimes:jpg,jpeg,png|dimensions:min_width=750,min_height=430',
                // 'photos3' => 'mimes:jpg,jpeg,png|dimensions:min_width=750,min_height=430'
                'photos' => 'mimes:jpg,jpeg,png',
                'photos2' => 'mimes:jpg,jpeg,png',
                'photos3' => 'mimes:jpg,jpeg,png'
            ]); 
            if ($validator->fails()) {
                return redirect()->route('market.edititem',$slug)
                    ->withErrors($validator)
                    ->withInput();
            } 
            $product = Product::where('user_id',Auth::id())->findOrFail($id);
            if($product){   
                $name = $request->name;
                $price = is_numeric($request->price)?$request->price:0;
                $discount = is_numeric($request->discount)?$request->discount:0;
                $active = (int)$request->active ? 1 : 0;
                $description= $request->sumernotehidden;
                // $imgappend=[];
                // dd($imgappend);
                // print_r(Auth::user()->id);exit();
                $product->name = $name;
                $product->price = $price;
                $product->discount = $discount;
                $product->active = $active;
                $product->description=$description;
                $product->save();
                // check last child have try to delete and new insert
                if(isset($request->lastchildid) && !empty($request->lastchildid)){ 
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
                    $media = $product
                        ->addMedia($file) 
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection();
                    $this->mediaconvert($media); 
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
                    $media = $product
                        ->addMedia($file)
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection(); 
                    $this->mediaconvert($media);
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
                   
                    $media = $product
                        ->addMedia($file)
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection();
                    $this->mediaconvert($media);
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
                    $media = $product    
                        ->addMedia($file) 
                        ->sanitizingFileName(function($filename) {
                            return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                        })
                        ->toMediaCollection();
                    $this->mediaconvert($media);
                } 
            }
            
                return redirect('market/mymanageitem')->with('success', 'Record has been updated!');
            }
        }
        $data['breadcrub']='update item';
        $data['product']=Product::where('user_id',Auth::id())->findOrFail($id); 
        $currentCat=[];
        $data['clid']='';
        // check if have category in relation
        if(count($data['product']->categories_ads) > 0){
            $data['clid']=$data['product']->categories_ads[0]->id;
            $node = Category::findOrFail($data['product']->categories_ads[0]->id);
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
    public function mediaconvert($media){
        $getThub = $media->getPath('thumb');  
        $file_name = $media->file_name; 
        // $name = $media->name; 
        $id = $media->id; 
        // get crop image
        $cropPath = storage_path('app/public/'.$id.'/conversions/'.$file_name);
        $cropPathFit = storage_path('app/public/'.$id.'/conversions/crop.png');
        Image::load($getThub)->crop(Manipulations::CROP_TOP, 361, 230)->save($cropPath);
        Image::load($getThub)
            ->crop(Manipulations::CROP_TOP, 750, 430)
            ->format(Manipulations::FORMAT_PNG)
            ->background('ffffff')->save($cropPathFit);
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
