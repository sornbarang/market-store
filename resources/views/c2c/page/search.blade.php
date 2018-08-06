@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

@include('elements.search')
    @if(count($data['searchpros']) > 0)
    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Wordpress
                                        <span>35</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Landing Page
                                        <span>45</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Psd Template
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Plugins
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">HTML Template
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Components
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <!-- Request::url() get current url -->
                                <!-- Request::query('searchstr') is get param  -->
                                <form action="{{ Request::url() }}" method="get">
                                    <input type="hidden" value="{{ Request::query('record') ?? 25 }}" name="record">
                                    <input type="hidden" value="{{ Request::query('searchstr') ?? '' }}" name="searchstr">
                                    <select name="price"> 
                                        <option value="low" {{$data['order']=='asc'?'selected':''}}>Price : Low to High</option>
                                        <option value="high" {{$data['order']=='desc'?'selected':''}}>Price : High to low</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </form>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <!-- Request::url() get current url -->
                                <form action="{{ Request::url() }}">
                                <!-- Request::query('searchstr') is get param  -->
                                <input type="hidden" value="{{ Request::query('searchstr') ?? '' }}" name="searchstr">
                                <input type="hidden" value="{{ Request::query('price') ?? 'low' }}" name="price">
                                    <select name="record">
                                        <option value="12" {{$data['record']==12?'selected':''}}>12 Items per page</option>
                                        <option value="15" {{$data['record']==15?'selected':''}}>15 Items per page</option>
                                        <option value="25" {{$data['record']==25?'selected':''}}>25 Items per page</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </form>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--layout">
                            <a href="javascript:void(0)">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('/')}}images/svg/grid.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('/')}}images/svg/list.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!-- end /.filter-area -->
    <!--================================
        END FILTER AREA
    =================================-->
    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                @foreach($data['searchpros'] as $val)
                    @php
                        $img=''; 
                        $getFirstMedia = $val->getFirstMedia();  
                        $getUrlThum=$getFirstMedia->getUrl('thumb');  
                        if($getFirstMedia){
                            $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                        } 
                    @endphp
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{$img}}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>{{$val->getTranslation(app()->getLocale())->name}}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">{{$val->user->name}}</a>
                                    </p>
                                </li>
                                <!-- <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li> -->
                            </ul>

                            <p>{{ !empty($val->user->profile->bio) ? $val->user->profile->bio : '' }}</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$ {{$val->price ?? 0}}</span>
                                {{--<p>
                                    <span class="lnr lnr-heart"></span> 90</p>--}}
                            </div>
                            {{--<div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span>
                                </p>
                            </div>--}}
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
                @endforeach
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                            {{$data['searchpros']->links()}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->
    @else
        <h6 class="text-center">No records of {{$data['strsearch']}}</h6>
    @endif
<!--================================
    START COUNTER UP AREA
=================================-->
@include('elements.membercount')
<!--================================
    START CALL TO ACTION AREA
=================================-->
@include('elements.joinshop')
<!--================================
    END CALL TO ACTION AREA
=================================-->
@stop