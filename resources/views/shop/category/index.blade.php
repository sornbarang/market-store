@extends('layouts.shop-layout')
@section('content')
    @include('elements.search')
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
        {{--<div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>Newest Release Products</h2>
                    </div>

                    <div class="filter__menu">
                        <p>Filter by:</p>
                        <div class="filter__menu_icon">
                            <img class="svg" src="{{asset('/')}}images/svg/menu.svg" alt="">

                            <ul class="filter_dropdown">
                                <li><a href="#">Trending items</a></li>
                                <li><a href="#">Best seller</a></li>
                                <li><a href="#">Best rating</a></li>
                                <li><a href="#">Low price</a></li>
                                <li><a href="#">High price</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end /.col-md-12 -->
        </div>--}}
        <!-- end /.row -->
            <!-- start .row loop categories -->
            <div class="row">
            {{--@foreach ($data['category'] as $cat)
                @php
                    foreach($cat->translations as $lang){
                        if($lang->locale==app()->getLocale()){
                            $link=['link'=>route('market.dynamiccat',$lang->categories_ads_id),'name'=>$lang->name];
                        }
                    }
                @endphp
                <!-- start .col-md-4 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card product--card3">
                            <div class="product__thumbnail">
                                <img src="{{ asset('images/p1.jpg') }}" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="{{$link['link']}}" class="transparent btn--sm btn--round">@lang('frontlabel.moreinfo')</a>
                                </div><!-- end /.prod_btn -->
                            </div><!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="{{$link['link']}}" class="product_title"><h4>{{$link['name']}}</h4></a>
                            </div><!-- end /.product-desc -->
                        </div>
                        <!-- end /.single-product -->
                    </div><!-- end /.col-md-4 -->
                @endforeach--}}

            </div>

            <!-- start .row loop categories-->
        {{--<div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="all-products.html" class="btn btn--lg btn--round">@lang('frontlabel.allpro')</a>
                </div>
            </div><!-- end ./col-md-12 -->
        </div>--}}<!-- end /.row -->
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
    END COUNTER UP AREA
=================================-->


    <!--================================
        START WHY CHOOSE US AREA
    =================================-->
    {{--<section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Why Choose <span class="highlighted">MartPlace</span></h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</p>
                    </div>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">One Time Payment</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">Quality Products</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-lock mcolor1"></span>
                            <h3 class="feature2-title">100% Secure Paymentt</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-chart-bars mcolor2"></span>
                            <h3 class="feature2-title">Well Organized Code</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-leaf mcolor3"></span>
                            <h3 class="feature2-title">Life Time Free Update</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">Fast and Friendly Support</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet diam
                                congue is laoreet elit metus.</p>
                        </div><!-- end /.feature2__content -->
                    </div><!-- end /.feature2 -->
                </div><!-- end /.col-md-4 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>--}}
    <!--================================
    END WHY CHOOSE US AREA
=================================-->


    <!--================================
        START SPECIAL FEATURES AREA
    =================================-->
    {{--<section class="special-feature-area bgcolor2 special-feature--2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="special-feature feature--1">
                        <img src="{{asset('/')}}images/spf1.png" alt="Special Feature image">
                        <h3 class="special__feature-title">30 Days Money Back <span class="highlight">Guarantee</span></h3>
                    </div>
                </div><!-- end /.col-md-6 -->
                <div class="col-md-6">
                    <div class="special-feature feature--2">
                        <img src="{{asset('/')}}images/spf2.png" alt="Special Feature image">
                        <h3 class="special__feature-title">Fast and Friendly <span class="highlight">Support</span></h3>
                    </div>
                </div><!-- end /.col-md-6 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>--}}
    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
    END CALL TO ACTION AREA
    =================================-->
@stop