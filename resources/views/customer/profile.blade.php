@extends('layouts.app-layout')
@section('content') 
<!--================================
        START BREADCRUMB AREA
    =================================-->
    @include('elements.customer-breadcrumb')
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AUTHOR AREA
    =================================-->
    @include('elements.customer-menu') 
    @php 
        $media = (Auth::user()->profile != null) ? Auth::user()->profile->getMedia() : [];
        foreach($media as $val){  
            if(Auth::user()->profile->avatar==$val->id){
                $avatar=$val->id.'/avatar100.png';  
            } 
            if(Auth::user()->profile->cover_image==$val->id){
                $cover=$val->id.'/cover.png';  
            }
        }   
    @endphp
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos mb-0 pb-0">
                                <div class="author_avatar">
                                    @if(isset($avatar) && !empty($avatar))
                                        <img src="{{Storage::url($avatar)}}" alt="Presenting the broken author avatar :D">
                                    @else
                                        <img src="{{asset('/')}}images/author-avatar.jpg" alt="Presenting the broken author avatar :D">
                                    @endif 
                                </div>

                                <div class="author">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p>Signed Up: {{Auth::user()->created_at}}</p>
                                </div>
                                <!-- end /.author -->

                                <div class="author-badges">
                                    <ul class="list-unstyled">
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Diamnond Author">
                                                <img src="{{asset('/')}}images/svg/author_rank_diamond.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has sold more than $10k">
                                                <img src="{{asset('/')}}images/svg/author_level_3.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Referred 10+ members">
                                                <img src="{{asset('/')}}images/svg/affiliate_level_1.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has Collected 2+ Items">
                                                <img src="{{asset('/')}}images/svg/collection_level_1.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Exclusive Author">
                                                <img src="{{asset('/')}}images/svg/exclusive_author.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Weekly Featured Author">
                                                <img src="{{asset('/')}}images/svg/featured_author.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Member for 2 Year">
                                                <img src="{{asset('/')}}images/svg/members_years.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="The seller is recommended by authority">
                                                <img src="{{asset('/')}}images/svg/recommended.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Won a contest">
                                                <img src="{{asset('/')}}images/svg/contest_winner.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Helped to resolve copyright issues">
                                                <img src="{{asset('/')}}images/svg/copyright.svg" alt="" class="svg">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.author-badges -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->


                                <!-- <div class="author-btn">

                                    <a href="#" class="btn btn--md btn--round">@lang('profile.follow')</a>

                                </div> -->
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                {{--<li>
                                    <a href="author.html">@lang('profile.profile')</a>
                                </li>--}}
                                <li>
                                    <a class="active" href="#">@lang('profile.authitems')</a>
                                </li>
                                {{--<li>
                                    <a href="author-reviews.html">Customer Reviews</a>
                                </li>
                                <li>
                                    <a href="#">Followers (67)</a>
                                </li>
                                <li>
                                    <a href="author-following.html">Following (39)</a>
                                </li>--}}
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        {{--<div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1">
                                    <span class="circle"></span>Available for Freelance work</label>
                            </div>
                        </div>--}}
                        <!-- end /.author-card -->

                        {{--<div class="sidebar-card message-card">
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
                                <p> Please
                                    <a href="#">sign in</a> to contact this author.</p>
                            </div>
                            <!-- end /.message-form -->
                        </div>--}}
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>@lang('profile.totalitems')</p>
                                <h3>{{count(Auth::user()->productads)}}</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>@lang('profile.totalsales')</p>
                                <h3>36,957</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>@lang('profile.totalrates')</p>
                                <div class="row no-gutters p-2">
                                    <div class="col-md-8 col-sm-10  text-md-right pr-1">
                                        <div class="d-flex align-items-sm-center align-items-center justify-content-center justify-content-lg-end text-sm-left totalrate"></div>
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
                    </div>
                    <!-- end /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-bar clearfix filter-bar2">
                                <div class="filter__option filter--text pull-left">
                                    <p>
                                        <span>{{count(Auth::user()->productads)}}</span> @lang('profile.authitems')</p>
                                </div>

                                <div class="pull-right">
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" class="dropdown-trigger dropdown-toggle" id="drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('profile.category')
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                            <li>
                                                <a href="#">Wordpress
                                                    <span>35</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('profile.filter')
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                            <li>
                                                <a href="#">Trending items</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.pull-right -->
                            </div>
                            <!-- end filter-bar -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-6 -->
                        @foreach(Auth::user()->productads as $val)
                            @php 
                                $img='';
                                $getFirstMedia = $val->getFirstMedia(); 
                                if($getFirstMedia){
                                    $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                                }else{
                                    $img = asset('imgs/default/conversions/default.jpg');
                                }
                            @endphp 
                        <div class="col-md-4">
                            <!-- start .single-product -->
                            <div class="product product--card cProfileProduct">
                                <div class="hot position-absolute text-white bg-danger p-1 font-weight-bold rounded-0" style="z-index:9;max-width:100px;">
                                    HOT
                                </div>
                                <div class="product__thumbnail"> 
                                    <img src="{{$img}}" alt="Product Image">
                                    <div class="prod_btn">
                                        @if(isset($data['type']) && $data['type']=='shop')
                                            <a href="{{route('shop.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                        @else
                                            <a href="{{route('market.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                        @endif
                                        <div class="row no-gutters">
                                            {{--<div class="col-md-12">
                                                @if(isset($data['type']) && $data['type']=='shop')
                                                    <a href="{{route('shop.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                                @else
                                                    <a href="{{route('market.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                                @endif
                                            </div>--}}
                                            <div class="col-md-12 pt-3">
                                                <div class="row no-gutters ">
                                                    <div class="col-4">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-12">
                                                                <span class="lnr lnr-heart scolor"></span>
                                                            </div>
                                                            <div class="col-md-12 text-white font-weight-bold">
                                                                <span>35</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <span class="lnr lnr-bubble mcolor3"></span>
                                                            </div>
                                                            <div class="col-md-12 text-white font-weight-bold">
                                                                @php 
                                                                    $getUserRateOfProduct = \willvincent\Rateable\Rating::distinct()->where('rateable_id',$val->id); 
                                                                @endphp
                                                                <span>{{$getUserRateOfProduct->count()??0}}</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="row">
                                                            <div class="col-md-12"> 
                                                                <div style="padding-bottom:3px;" class="rateproductprofile" data-rating="{{$val->averageRating}}">
                                                                    <input  type="hidden" name="score">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 text-white font-weight-bold"> 
                                                                <span>{{number_format($val->averageRating, 2, '.', ',')}} ({{$val->sumRating}})</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>{{str_limit($val->name,45)}}</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('/')}}images/auth3.jpg" alt="author image">
                                            <p>
                                                <a href="#">{{str_limit($val->user->name,15)}}</a>
                                            </p>
                                        </li> 
                                    </ul>
                                    @php 
                                    //$string = preg_replace("/(\<(\/?[^\>]+)\>)/", " ",html_entity_decode($val->translateOrNew(app()->getLocale())->description));
                                    $string = strip_tags($val->translateOrNew(app()->getLocale())->description);
                                    $string = preg_replace("/&#?[a-z0-9]{2,8};/i","",$string);
                                    @endphp
                                    {{str_limit($string,100)}}
                                </div>
                                <!-- end /.product-desc -->

                               <div class="product-purchase p-2"> 
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
                                                <div class="rateproductprofile" data-rating="{{$val->averageRating}}">
                                                    <input  type="hidden" name="score">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @if(isset($data['type']) && $data['type']=='shop')
                                        <div class="row no-gutters">
                                            <div class="col-md-12">
                                                <button style="line-height:inherit;" class="btn btn--icon btn-sm float-right p-2">
                                                    <span class="lnr lnr-cart"></span>@lang('frontlabel.addtocard')
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                </div><!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        @endforeach
                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->

                    {{--<div class="pagination-area pagination--right">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                            {{Auth::user()->productads->links()}}
                            </div>
                        </nav>
                    </div>--}}
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
                $('div.totalrate').raty(
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
                }
            );
            $('div.rateproductprofile').raty(
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