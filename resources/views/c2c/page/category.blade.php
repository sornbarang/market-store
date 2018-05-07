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
            <img src="images/search.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3>
                                <span>35,270</span> website templates from our creative community</h3>
                        </div>
                        <div class="search__field">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Search your products">
                                    <button class="btn btn--round" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">All Products</a>
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
                                    <a href="{{url('c2c/temp/product')}}" class="transparent btn--sm btn--round">More Info</a>
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
<section class="counter-up-area bgimage">
    <div class="bg_image_holder">
        <img src="{{asset('/')}}images/countbg.jpg" alt="">
    </div>
    <!-- start .container -->
    <div class="container content_above">
        <!-- start .col-md-12 -->
        <div class="col-md-12">
            <div class="counter-up">
                <div class="counter mcolor2">
                    <span class="lnr lnr-briefcase"></span>
                    <span class="count">38,436</span>
                    <p>items for sale</p>
                </div>
                <div class="counter mcolor3">
                    <span class="lnr lnr-cloud-download"></span>
                    <span class="count">38,436</span>
                    <p>total Sales</p>
                </div>
                <div class="counter mcolor1">
                    <span class="lnr lnr-smile"></span>
                    <span class="count">38,436</span>
                    <p>appy customers</p>
                </div>
                <div class="counter mcolor4">
                    <span class="lnr lnr-users"></span>
                    <span class="count">38,436</span>
                    <p>members</p>
                </div>
            </div>
        </div><!-- end /.col-md-12 -->
    </div><!-- end /.container -->
</section>
<!--================================
    START CALL TO ACTION AREA
=================================-->
<section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="{{asset('/')}}images/calltobg.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                    <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                    <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
    END CALL TO ACTION AREA
=================================-->
@stop