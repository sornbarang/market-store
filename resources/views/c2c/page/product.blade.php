@extends('layouts.app-layout')
@section('content')
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
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="search">
                            <div class="search__title"><h3><span>35,270</span> website templates from our creative community</h3></div>
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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Phone & Tablets</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li class="active"><a href="#">Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end /.row -->
            </div><!-- end /.container -->
        </div><!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2">
                        <div class="pull-right">
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
                                <a href="category-grid.html">
                                    <div class="svg-icon"><img class="svg" src="{{asset('/')}}images/svg/grid.svg" alt="it's just a layout control folks!"></div>
                                </a>
                                <a href="category-list.html">
                                    <div class="svg-icon"><img class="svg" src="{{asset('/')}}images/svg/list.svg" alt="it's just a layout control folks!"></div>
                                </a>
                            </div>
                        </div>
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
    @php
        $cats = ['Wordpress'=>'35','Landing Page'=>'45','Psd Template'=>'13','Plugins'=>'08','HTML Template'=>'34','Components'=>'78','Joomla Template'=>'26'];
        $profilters = ['Trending Products','Popular Products','New Products','Best Seller','Best Rating','Free Support','On Sale'];
        $products = ['Finance and Consulting','Best Free Responsive','AppsPress - HTML5 ','Finance and Consulting','Best Free Responsive','AppsPress - HTML5 ','Finance and Consulting','Best Free Responsive','AppsPress - HTML5 '];
    @endphp
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-md-3">
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapse1">
                                <h4 >Categories <span class="lnr lnr-chevron-down"></span></h4>
                            </a> 
                            <div class="collapse in collapsible-content" id="collapse1">
                                <ul class="card-content">
                                    @foreach($cats as $catname => $catvals)
                                        <li><a href="#"><span class="lnr lnr-chevron-right"></span>{{$catname}}<span class="item-count">{{$catvals}}</span></a></li> 
                                    @endforeach
                                </ul>
                            </div><!-- end /.collapsible_content --> 
                        </div><!-- end /.sidebar-card -->

                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapse2">
                                <h4>Filter Products<span class="lnr lnr-chevron-down"></span></h4>
                            </a>
                            <div class="collapse in collapsible-content" id="collapse2">
                                <ul class="card-content">
                                @foreach($profilters as $pro)
                                    <li><div class="custom-checkbox2"><input type="checkbox" id="opt{{ $loop->iteration }}" class="" name="filter_opt"> <label for="opt{{ $loop->iteration }}"><span class="circle"></span>{{$pro}}</label></div></li>
                                @endforeach
                            </ul>
                            </div>
                        </div><!-- end /.sidebar-card -->
    
                        <div class="sidebar-card card--slider">
                                <a class="card-title" href="#collapse3" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapse3">
                                    <h4>Filter Products<span class="lnr lnr-chevron-down"></span></h4>
                                </a>
                                <div class="collapse in collapsible-content" id="collapse3">
                                    <div class="card-content">
                                        <div class="range-slider price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 6%; width: 54%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 6%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>

                                        <div class="price-ranges">
                                            <span class="from rounded">$30</span>
                                            <span class="to rounded">$300</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->
                        </aside><!-- end aside -->
                </div><!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-md-9"> 
                        <div class="row">
                            @foreach($products as $val)
                                <div class="col-md-4 col-sm-4">
                                    <!-- start .single-product -->
                                    <div class="product product--card product--card-small">

                                        <div class="product__thumbnail">
                                            <img src="{{asset('/')}}images/p1.jpg" alt="Product Image">
                                            <div class="prod_btn">
                                                <a href="{{url('c2c/temp/productdetail')}}" class="transparent btn--sm btn--round">More Info</a>
                                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                            </div><!-- end /.prod_btn -->
                                        </div><!-- end /.product__thumbnail -->
                                        <div class="product-desc">
                                            <a href="#" class="product_title"><h4>{{$val}}</h4></a>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="{{asset('/')}}images/auth3.jpg" alt="author image">
                                                    <p><a href="#">AazzTech</a></p>
                                                </li>
                                                <li class="out_of_class_name">
                                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>27</span></p></div>
                                                    <div class="rating product--rating">
                                                        <ul>
                                                            <li><span class="fa fa-star"></span></li>
                                                            <li><span class="fa fa-star"></span></li>
                                                            <li><span class="fa fa-star"></span></li>
                                                            <li><span class="fa fa-star"></span></li>
                                                            <li><span class="fa fa-star-half-o"></span></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div><!-- end /.product-desc -->

                                        <div class="product-purchase">
                                            <div class="price_love">
                                                <span>$15</span>
                                            </div>
                                            <a href="#"><span class="lnr lnr-book"></span>Plugin</a>
                                        </div><!-- end /.product-purchase -->
                                    </div><!-- end /.single-product -->
                                </div><!-- end /.col-md-4 -->
                            @endforeach
                        </div> 
                </div><!-- end /.col-md-9 -->
            </div><!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area categorised_item_pagination">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#"><span class="lnr lnr-arrow-left"></span></a>
                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"><span class="lnr lnr-arrow-right"></span></a>
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
    END COUNTER UP AREA
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
@stop