@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

<!--================================
      START SEARCH AREA
  =================================-->
<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('/')}}images/search.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        {{--<div class="search__title">
                            <h3>
                                <span>35,270</span> website templates from our creative community</h3>
                        </div>--}}
                        <div class="search__field">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="@lang('frontlabel.searchpro')">
                                    <button class="btn btn--round" type="submit">@lang('frontlabel.search')</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="{{url('/'.app()->getLocale())}}">@lang('menu.home')</a>
                                </li>
                                <li class="active">
                                    <a href="#">@lang('frontlabel.allpro')</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>
<!--================================
    END SEARCH AREA
=================================-->

<!--================================
    START PRODUCTS AREA
=================================-->
<section class="products section--padding">
    <!-- start container -->
    <div class="container">
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">

            @php
                $categories = ['Category','Category','Category','Category','Category'];
            @endphp

            @foreach ($categories as $category)
                <!-- start .col-md-4 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card product--card3">

                            <div class="product__thumbnail">
                                <img src="{{asset('/')}}images/p1.jpg" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="{{url(app()->getLocale().'/market/temp/product')}}" class="transparent btn--sm btn--round">@lang('frontlabel.moreinfo')</a>
                                </div><!-- end /.prod_btn -->
                            </div><!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="#" class="product_title"><h4>{{$category}} {{ $loop->iteration }}</h4></a>
                            </div><!-- end /.product-desc -->
                        </div>
                        <!-- end /.single-product -->
                    </div><!-- end /.col-md-4 -->
            @endforeach

        </div>

        <!-- start .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="all-products.html" class="btn btn--lg btn--round">All New Products</a>
                </div>
            </div><!-- end ./col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>
<!--================================
    END PRODUCTS AREA
=================================-->

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