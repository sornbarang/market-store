@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

@include('elements.search')

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