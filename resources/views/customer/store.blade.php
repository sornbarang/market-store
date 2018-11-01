@extends('layouts.app-layout')
@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{route('market')}}">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Author Profile</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{$data['user']->name??''}}'s Profile</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AUTHOR AREA
    =================================-->
    @php   
        $media = ($data['user']->profile != null) ? $data['user']->profile->getMedia() : [];
        foreach($media as $val){  
            if($data['user']->profile->avatar==$val->id){
                $avatar=$val->id.'/avatar100.png';  
            } 
            if($data['user']->profile->cover_image==$val->id){
                $cover=$val->id.'/cover.png';  
            }
        }   
    @endphp
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    @if(isset($avatar) && !empty($avatar))
                                        <img src="{{Storage::url($avatar)}}" alt="Presenting the broken author avatar :D" style="border-radius:50%;">
                                    @else
                                        <img src="{{ asset('images/author-avatar.jpg') }}" alt="Presenting the broken author avatar :D">
                                    @endif
                                </div> 
                                <div class="author">
                                    <h4>{{$data['user']->name}}</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="no-gutters row d-flex justify-content-center align-items-center">
                                                <div class="col-md-12 text-center">Phone : {{$data['user']->profile->phone??'N/A'}}</div>
                                            </div>
                                             @php 
                                                if($data['totalRate'] >=4){
                                                    $totalRate=3;
                                                }else if($data['totalRate'] < 4 && $data['totalRate'] >= 2 ){
                                                    $totalRate=2;
                                                }else if($data['totalRate'] < 2 && $data['totalRate'] >= 1 ){
                                                    $totalRate=1;
                                                }else{
                                                    $totalRate=2;
                                                }
                                            @endphp
                                            <div class="no-gutters row d-flex justify-content-center align-items-center">
                                                <div class="col-6 text-right">
                                                    Total rates :
                                                </div>
                                                <div class="col-6 d-flex justify-content-start align-items-center"> 
                                                    <div class="raty total"></div>&nbsp; ({{$data['totalRate']??'0'}})
                                                </div>
                                            </div>
                                            <div class="no-gutters row d-flex justify-content-center align-items-center">
                                                <div class="col-md-12 text-center">Signed Up : {{$data['user']->created_at}}</div> 
                                            </div>
                                        </div>  
                                    </div>  
                                    <div class="row p-2 no-gutters">
                                        <div class="col-6 pr-1">
                                            <div class="author-info pcolorbg mb-0">
                                                <p>Total Follower</p>
                                                <h3 class="text-truncate" title="{{$data['totalFollower']??0}}">{{$data['totalFollower']??0}}</h3>
                                            </div>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <div class="author-info mcolorbg4 mb-0">
                                                <p>Total Products</p>
                                                <h3 class="text-truncate" title="{{$data['totalProducts']??0}}">{{$data['totalProducts']??0}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.author -->
                                {{--
                                <div class="author-badges">
                                    <ul class="list-unstyled">
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Diamnond Author">
                                                <img src="{{ asset('images/svg/author_rank_diamond.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has sold more than $10k">
                                                <img src="{{ asset('images/svg/author_level_3.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Referred 10+ members">
                                                <img src="{{ asset('images/svg/affiliate_level_1.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has Collected 2+ Items">
                                                <img src="{{ asset('images/svg/collection_level_1.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Exclusive Author">
                                                <img src="{{ asset('images/svg/exclusive_author.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Weekly Featured Author">
                                                <img src="{{ asset('images/svg/featured_author.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Member for 2 Year">
                                                <img src="{{ asset('images/svg/members_years.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="The seller is recommended by authority">
                                                <img src="{{ asset('images/svg/recommended.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Won a contest">
                                                <img src="{{ asset('images/svg/contest_winner.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Helped to resolve copyright issues">
                                                <img src="{{ asset('images/svg/copyright.svg') }}" alt="" class="svg">
                                            </span>
                                        </li>
                                    </ul>
                                </div>--}}
                                <!-- end /.author-badges -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="{{$data['product']->user->profile->facebook_link??'javascript:void(0)'}}">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$data['product']->user->profile->twitter_link??'javascript:void(0)'}}">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$data['product']->user->profile->instagram_link??'javascript:void(0)'}}">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (Route::has('login')) 
                                        @auth 
                                            @if($data['user']->id!=Auth::user()->id)
                                                @if(!$data['isFollowed'])
                                                    <a href="{{ route('user.follow', $data['user']->id) }}" class="btn btn--md btn--round">Follow</a>
                                                @else
                                                    <a href="{{ route('user.unfollow', $data['user']->id) }}" class="btn btn--md btn--round">UnFollow</a>
                                                @endif
                                            @endif 
                                        @endauth
                                    @endif 
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">Profile</a>
                                </li>
                                {{--
                                <li>
                                    <a href="author-items.html">Author Items</a>
                                </li>
                                <li>
                                    <a href="author-reviews.html">Customer Reviews</a>
                                </li>
                                <li>
                                    <a href="author-followers.html">Followers (67)</a>
                                </li>
                                <li>
                                    <a href="author-following.html">Following (39)</a>
                                </li>--}}
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1">
                                    <span class="circle"></span>Available for Freelance work</label>
                            </div>
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card message-card">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <div class="message-form">
                                <form action="#">
                                    <div class="form-group">
                                        <textarea name="message" class="text_field" id="author-message" placeholder="Your message..."></textarea>
                                    </div>

                                    <div class="msg_submit">
                                        <button type="submit" class="btn btn--md btn--round">send message</button>
                                    </div>
                                </form>
                                @if (Route::has('login'))
                                    @auth
                                    
                                    @else
                                    <p> Please
                                        <a href="{{route('register')}}">sign in</a> to contact this author.</p>
                                    @endauth 
                                @endif 
                            </div>
                            <!-- end /.message-form -->
                        </div>
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        {{--
                        <div class="col-md-4 col-sm-4"> 
                            <div class="author-info pcolorbg">
                                <p>Total Follower</p>
                                <h3>36,957</h3>
                            </div> 
                        </div>
                        <!-- end /.col-md-4 -->
    
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Pro</p>
                                <h3>{{count($data['product'])}}</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>@lang('profile.totalrates')</p>
                                <div class="row no-gutters p-2">
                                    <div class="col-md-8 col-sm-10  text-md-right pr-1">
                                        <div class="d-flex align-items-sm-center align-items-center justify-content-center justify-content-lg-end text-sm-left raty total"></div>
                                    </div>
                                    @php 
                                        if($data['totalRate'] >=4){
                                            $totalRate=3;
                                        }else if($data['totalRate'] < 4 && $data['totalRate'] >= 2 ){
                                            $totalRate=2;
                                        }else if($data['totalRate'] < 2 && $data['totalRate'] >= 1 ){
                                            $totalRate=1;
                                        }else{
                                            $totalRate=2;
                                        }
                                    @endphp
                                    <div class="col-md-4 col-sm-2   text-md-left text-white">({{$data['totalRate']}})</div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->
                        --}}             
                        <div class="col-md-12 col-sm-12">
                            <div class="author_module">
                                @if(isset($cover) && !empty($cover))
                                    <img src="{{Storage::url($cover)}}" class="img-fluid w-100" alt="Responsive image"> 
                                @else
                                    <img src="{{ asset('images/authcvr.jpg') }}" alt="author image">
                                @endif
                                
                            </div>

                            <div class="author_module about_author">
                                <h2>About
                                    <span>{{$data['user']->name??''}}</span>
                                </h2>
                                <p>{{$data['user']->profile->bio??''}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>Newest Products</h2>
                                </div> 
                                {{-- a href="#" class="btn btn--sm">See all Items</a>--}}
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-4 -->
                        @foreach($data['product'] as $val)
                            @php 
                                $avatar='';  
                                $media = ($val->user->profile != null) ? $val->user->profile->getMedia() : [];
                                foreach($media as $m){   
                                    if($val->user->profile->avatar == $m->id){
                                        $avatar=$m->id.'/'.$m->file_name;  
                                    }
                                } 
                                $img='';
                                $getFirstMedia = $val->getFirstMedia(); 
                                if($getFirstMedia){
                                    $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                                }else{
                                    $img = asset('imgs/default/conversions/default.jpg');
                                } 
                            @endphp  
                                <div class="col-lg-4 col-md-6 cStoreProduct">
                                    <!-- start .single-product -->
                                    <div class="product product--card product--card-small">
                                        <div class="hot position-absolute text-white bg-danger p-1 font-weight-bold rounded-0" style="z-index:9;max-width:100px;">
                                            HOT
                                        </div>
                                        <div class="product__thumbnail">
                                            <img src="{{ $img }}" alt="Product Image">
                                            <div class="prod_btn">
                                                <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                                            </div>
                                            <!-- end /.prod_btn -->
                                        </div>
                                        <!-- end /.product__thumbnail -->

                                        <div class="product-desc">
                                            <a href="#" class="product_title">
                                                <h4>{{str_limit($val->name,35)}}</h4>
                                            </a>
                                            <ul class="titlebtm">
                                                <li>
                                                    @if(isset($avatar) && !empty($avatar))
                                                        <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image"> 
                                                    @else
                                                        <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                                    @endif 
                                                    <p>
                                                        <a href="#">{{str_limit($val->user->name,15)}}</a>
                                                    </p>
                                                </li>
                                                <li class="out_of_class_name">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <p>
                                                                <span class="flag-icon flag-icon-kh"></span>
                                                                <span>Cam</span>
                                                            </p>
                                                        </div>
                                                        <div class="col">
                                                            <p> 
                                                                <span>{{null !== $val->user->profile && !empty($val->user->profile->location)?$val->user->profile->location:'N/A'}}</span>
                                                            </p>                                                                 
                                                        </div>
                                                    </div>
                                                </li>
                                                {{--
                                                <li class="out_of_class_name">
                                                    <div class="sell">
                                                        <p>
                                                            <span class="lnr lnr-cart"></span>
                                                            <span>27</span>
                                                        </p>
                                                    </div>
                                                    <div class="rating product--rating">
                                                        <ul>
                                                            <li>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star-half-o"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>--}}
                                            </ul>

                                        </div>
                                        <!-- end /.product-desc -->

                                        <div class="product-purchase">
                                            <div class="row no-gutters d-flex content-justify-center align-items-center">
                                                <div class="col-8 text-truncate">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            @if(null !==$val->discount && is_numeric($val->discount) && (int)$val->discount !=0)
                                                                <div class="w-100 text-price text-center">
                                                                    <span title="${{$val->price??0}}"><del>${{str_limit($val->price??0,5)}}<del></span> 
                                                                </div>
                                                            @else
                                                                <div class="w-100">
                                                                    &nbsp;
                                                                </div>
                                                            @endif
                                                            <div class="w-100">
                                                                <div class="price_love w-100 text-center">
                                                                    <span title="${{null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price}}">${{str_limit(null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price,5)}}</span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="white-space:normal;" class="col-md-4 text-center align-self-center text-danger font-weight-bold">
                                                            @if(null !==$val->discount && is_numeric($val->discount) && (int)$val->discount !=0)
                                                                {{round($val->discount, 2)}} % Off
                                                            @else
                                                                &nbsp;
                                                            @endif
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="col-4 text-truncate"> 
                                                    <a href="javascript:void(0)">
                                                        <div class="rateproduct cproduct" data-rating="{{$val->averageRating}}">
                                                            <input  type="hidden" name="score">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>  
                                        </div>
                                        <!-- end /.product-purchase -->
                                    </div>
                                    <!-- end /.single-product -->
                                </div>   
                        @endforeach
                        <!-- end /.col-md-4 --> 
                    </div>
                    <!-- end /.row -->
                    <div class="pagination-area pagination--right">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                {{$data['product']->links()}}
                            </div>
                        </nav>
                    </div>       
                </div>
                <!-- end /.col-md-8 -->                         
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->
    @section('cusomescript')
    <script type="text/javascript">
        $(document).ready(function(){  
            $('div.raty.total').raty(
            { 
                starOff   :"{{asset('imgs/no.png')}}",
                iconRange: [            
                    { range: 1, on: "{{asset('imgs/0.png')}}"},
                    { range: 2, on: "{{asset('imgs/1.png')}}"},
                    { range: 3, on: "{{asset('imgs/2.png')}}"}
                ],   
                hints: ['unlike','normal','love'],
                readOnly:true,
                single:true,
                number:3,
                readOnly:true,
                score: "{{$totalRate}}"
            });
            $('div.rateproduct.cproduct').raty(
                { 
                    starOff   :"{{asset('imgs/no.png')}}",
                    iconRange: [            
                        { range: 1, on: "{{asset('imgs/0.png')}}"},
                        { range: 2, on: "{{asset('imgs/1.png')}}"},
                        { range: 3, on: "{{asset('imgs/2.png')}}"}
                    ],   
                    hints: ['unlike','normal','love'],
                    readOnly:true,
                    single:true,
                    number:3,
                    score: function() {
                        if($(this).attr('data-rating') >=4){
                            $num=3;
                        }else if($(this).attr('data-rating') < 4 && $(this).attr('data-rating') >= 2 ){
                            $num=2;
                        }else if($(this).attr('data-rating') < 2 && $(this).attr('data-rating') >= 1 ){
                            $num=1;
                        }else{
                            $num=2;
                        }
                        return $num;
                    }
                }
            );
        });
    </script>
    @stop  
    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop