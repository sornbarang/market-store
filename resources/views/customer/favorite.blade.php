@extends('layouts.app-layout')
@section('content') 
<!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="#">Favorites</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Your Favourites</h1>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter-bar3">
                        <div class="filter__option filter--text pull-left">
                            <p><span>570</span> Items</p>
                        </div>

                        <div class="pull-right">
                            <div class="filter__option filter--dropdown">
                                <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Filter By <span class="lnr lnr-chevron-down"></span>
                                </a>

                                <ul class="dropdown dropdown-menu" aria-labelledby="drop2">
                                    <li><a href="#">Trending items</a></li>
                                    <li><a href="#">Popular items</a></li>
                                    <li><a href="#">New items </a></li>
                                    <li><a href="#">Best seller </a></li>
                                    <li><a href="#">Best rating </a></li>
                                </ul>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="low">Price : Low to High</option>
                                        <option value="high">Price : High to low</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="12">12 Items per page</option>
                                        <option value="15">15 Items per page</option>
                                        <option value="25">25 Items per page</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--layout">
                                <div class="svg-icon"><img class="svg" src="{{asset('/')}}images/svg/grid.svg" alt="it's just a layout control folks!"></div>
                                <div class="svg-icon"><img class="svg" src="{{asset('/')}}images/svg/list.svg" alt="it's just a layout control folks!"></div>
                            </div>
                        </div><!-- end /.pull-right -->
                    </div><!-- end filter-bar -->
                </div><!-- end /.col-md-12 -->
            </div><!-- end filter-bar -->
        </div>
    </div>
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
                @for($i = 0; $i < 6; $i++)
                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{asset('/')}}images/p1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div><!-- end /.prod_btn -->
                        </div><!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title"><h4>MartPlace Extension Bundle</h4></a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                    <p><a href="#">AazzTech</a></p>
                                </li>
                                <li class="product_cat">
                                    <a href="#"><span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet congue.</p>
                        </div><!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10 - $50</span>
                                <p><span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell"><p><span class="lnr lnr-cart"></span><span>16</span></p></div>
                        </div><!-- end /.product-purchase -->
                    </div><!-- end /.single-product -->
                </div><!-- end /.col-md-4 -->
                @endfor
            </div><!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="http://localhost/wordpress1/page/3/"><span class="lnr lnr-arrow-left"></span></a>
                                <a class="page-numbers current" href="http://localhost/wordpress1/">1</a>
                                <a class="page-numbers" href="http://localhost/wordpress1/page/2/">2</a>
                                <a class="page-numbers" href="http://localhost/wordpress1/page/3/">3</a>
                                <a class="next page-numbers" href="http://localhost/wordpress1/page/3/"><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->


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