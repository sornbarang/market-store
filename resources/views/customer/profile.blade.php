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
                            <div class="author-infos">
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

                                <div class="author-btn">
                                    <a href="#" class="btn btn--md btn--round">@lang('profile.follow')</a>
                                </div>
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
                                    <a class="active" href="author-items.html">@lang('profile.authitems')</a>
                                </li>
                                {{--<li>
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
                                } 
                            @endphp 
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card cProfileProduct">

                                <div class="product__thumbnail"> 
                                    <img src="{{$img}}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="{{route('market.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
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

                               <div class="product-purchase">
                                    <div class="row">
                                        <div class="col text-md-left col-xs-12 col-sm-6 col-md-6">
                                            <div class="price_love">
                                                <span title="{{$val->price}}">$ {{str_limit($val->price,10)??0}}</span> 
                                            </div>
                                        </div>
                                        <div class="cflexcenter col text-xs-right  col-xs-12 col-sm-6 col-md-6">
                                        <div class="sell">
                                            <a href="javascript:void(0)">
                                                <div class="rateproductprofile" data-rating="{{$val->averageRating}}">
                                                    <input  type="hidden" name="score">
                                                </div>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
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
                    starOff   :"{{asset('imgs/0.png')}}",
                    iconRange: [            
                        { range: 1, on: "{{asset('imgs/1.png')}}"},
                        { range: 2, on: "{{asset('imgs/2.png')}}"},
                        { range: 3, on: "{{asset('imgs/3.png')}}"},
                        { range: 4, on: "{{asset('imgs/4.png')}}"},
                        { range: 5, on: "{{asset('imgs/5.png')}}"}
                    ], 
                    readOnly:true,
                    score: "{{$data['totalRate']}}"
                }
            );
            $('div.rateproductprofile').raty(
                { 
                    starOff   :"{{asset('imgs/0.png')}}",
                    iconRange: [            
                        { range: 1, on: "{{asset('imgs/1.png')}}"},
                        { range: 2, on: "{{asset('imgs/2.png')}}"},
                        { range: 3, on: "{{asset('imgs/3.png')}}"},
                        { range: 4, on: "{{asset('imgs/4.png')}}"},
                        { range: 5, on: "{{asset('imgs/5.png')}}"}
                    ], 
                    readOnly:true,
                    score: function() {
                        return $(this).attr('data-rating');
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