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
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li class="active"><a href="#">Manage Item</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Manage Item</h1>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li><a href="dashboard.html"><span class="lnr lnr-home"></span>Dashboard</a></li>
                            <li><a href="dashboard-setting.html"><span class="lnr lnr-cog"></span>Setting</a></li>
                            <li><a href="dashboard-purchase.html"><span class="lnr lnr-cart"></span>Purchase</a></li>
                            <li><a href="dashboard-add-credit.html"><span class="lnr lnr-dice"></span>Add Credits</a></li>
                            <li><a href="dashboard-statement.html"><span class="lnr lnr-chart-bars"></span>Statements</a></li>
                            <li><a href="dashboard-upload.html"><span class="lnr lnr-upload"></span>Upload Items</a></li>
                            <li class="active"><a href="dashboard-manage-item.html"><span class="lnr lnr-briefcase"></span>Manage Items</a></li>
                            <li><a href="dashboard-withdrawal.html"><span class="lnr lnr-briefcase"></span>Withdrawals</a></li>
                        </ul><!-- end /.dashboard_menu -->
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->
            </div><!-- end /.container -->
        </div><!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar dashboard_title_area clearfix filter-bar2">

                            <div class="dashboard__title dashboard__title pull-left">
                                <h3>Manage Items</h3>
                            </div>

                            <div class="pull-right">
                                <div class="filter__option filter--text">
                                    <p><span>26</span> Products</p>
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
                            </div><!-- end /.pull-right -->
                        </div><!-- end /.filter-bar -->
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row">
                    @for($i=0;$i<6;$i++)
                        <!-- start .col-md-4 -->
                        <div class="col-md-4 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p1.jpg" alt="Product Image">

                                    <div class="prod_option">
                                        <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="lnr lnr-cog setting-icon"></span>
                                        </a>

                                        <div class="options dropdown-menu" aria-labelledby="drop2">
                                            <ul>
                                                <li><a href="edit-item.html"><span class="lnr lnr-pencil"></span>Edit</a></li>
                                                <li><a href="#"><span class="lnr lnr-eye"></span>Hide</a></li>
                                                <li><a href="#" class="delete"><span class="lnr lnr-trash"></span>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-area">
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">
                                    <a class="prev page-numbers" href="#"><span class="lnr lnr-arrow-left"></span></a>
                                    <a class="page-numbers current" href="#">1</a>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="page-numbers" href="#">3</a>
                                    <a class="next page-numbers" href="#"><span class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </nav>
                        </div><!-- end /.pagination-area -->
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->
            </div><!-- end /.container -->
        </div><!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
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