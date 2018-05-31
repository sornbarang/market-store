@extends('layouts.app-layout')
@section('content') 
<!--================================
        START BREADCRUMB AREA
    =================================-->
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    @include('elements.customer-breadcrumb')
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    @include('elements.customer-menu')
    <section class="cart_area section--padding2 bgcolor">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>Product Details</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="add_info">Category</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                        <div class="product__description">
                                            <img src="{{asset('/')}}images/pur1.jpg" alt="Purchase image">
                                            <div class="short_desc">
                                                <a href="single-product.html">
                                                    <h4>Finance and Consulting Business Theme</h4>
                                                </a>
                                                <p>Nunc placerat mi id nisi inter dum mollis. Praesent phare...</p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>$59</span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="#" class="remove_from_cart">
                                                    <span class="lnr lnr-trash"></span>
                                                </a>
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>

                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                        <div class="product__description">
                                            <img src="{{asset('/')}}images/pur2.jpg" alt="Purchase image">
                                            <div class="short_desc">
                                                <a href="#">
                                                    <h4>Visibility Manager Subscriptions</h4>
                                                </a>
                                                <p>Nunc placerat mi id nisi inter dum mollis. Praesent phare...</p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>$59</span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="#" class="remove_from_cart">
                                                    <span class="lnr lnr-trash"></span>
                                                </a>
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>
                        </div>
                        <!-- end /.row -->

                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="cart_calculation">
                                    <div class="cart--subtotal">
                                        <p>
                                            <span>Cart Subtotal</span>$120</p>
                                    </div>
                                    <div class="cart--total">
                                        <p>
                                            <span>total</span>$120</p>
                                    </div>

                                    <a href="checkout.html" class="btn btn--round btn--md checkout_link">Proceed To Checkout</a>
                                </div>
                            </div>
                            <!-- end .col-md-12 -->
                        </div>
                        <!-- end .row -->
                    </div>
                    <!-- end /.product_archive2 -->
                </div>
                <!-- end .col-md-12 -->
            </div>
            <!-- end .row -->

        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop