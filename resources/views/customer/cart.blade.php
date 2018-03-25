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
                            <li class="active"><a href="#">Charts</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Charts</h1>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Charts 1</h3>
                        </div>
                    </div>
                    <div class="dashboard_module statistics_module">
                        <div class="dashboard__title">
                            <h4>Sales and Views Statistics</h4>

                            <div class="pull-right">
                                <div id="stat_legend" class="legend"></div>
                                <div class="select-wrap">
                                    <select name="months" class="period_selector">
                                        <option value="jan">Jan</option>
                                        <option value="feb">Feb</option>
                                        <option value="mar">Mar</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard__content">
                            <canvas id="myChart"></canvas>

                            <div class="statistics_data">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="single_stat_data">
                                            <h4 class="single_stat__title">478</h4>
                                            <p>Total <span>Sales</span> This Month</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center col-sm-4 col-xs-4">
                                        <div class="single_stat_data">
                                            <h4 class="single_stat__title">$2,478</h4>
                                            <p>Total <span>Earnings</span> This Month</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-right col-sm-4 col-xs-4">
                                        <div class="single_stat_data">
                                            <h4 class="single_stat__title">478</h4>
                                            <p>Total <span>Sales</span> This Month</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- end /.col-md-12 -->

                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Charts 2</h3>
                        </div>
                    </div>
                    <div class="dashboard_module single_item_visitor">
                        <div class="dashboard__title">
                            <h4>Single Items Visitors</h4>
                            <div class="pull-right">
                                <div class="select-wrap">
                                    <select name="months" class="period_selector">
                                        <option value="jan">Jan</option>
                                        <option value="feb">Feb</option>
                                        <option value="mar">Mar</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard__content">
                            <canvas id="single_item_visit"></canvas>

                            <div class="item_info">
                                <div class="select-wrap">
                                    <select name="item" class="period_selector">
                                        <option value="mattheme">Material Admin - Responsive Admin Theme</option>
                                        <option value="reactAdmin">Best Free Responsive ReactJS Admin Themes</option>
                                        <option value="design">Best YouTube Channels For UI/UX Designers</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>

                                <div class="info">
                                    <h4 class="indicate">+60%</h4>
                                    <p>Compared to Last Month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Charts 3</h3>
                        </div>
                    </div>
                    <div class="dashboard_module single_item_visitor">
                        <div class="dashboard__title">
                            <h4>Total Revenue</h4>
                            <div id="visit_legend" class="legend"></div>
                        </div>
                        <div class="dashboard__content">
                            <canvas id="revenue"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Charts 4</h3>
                        </div>
                    </div>

                    <div class="dashboard_module visit_data">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="dashboard__content">
                                    <div class="chart_top">
                                        <div class="v_refer">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#visit_source" aria-controls="visit_source" role="tab" data-toggle="tab">Visit Source</a></li>
                                                <li role="presentation"><a href="#referrals" aria-controls="referrals" role="tab" data-toggle="tab">Referrals</a></li>
                                            </ul>
                                            <div class="select-wrap">
                                                <select name="mon" class="period_selector">
                                                    <option value="jan">Jan</option>
                                                    <option value="feb">Feb</option>
                                                    <option value="mar">Mar</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>

                                        <div class="charts">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="visit_source">
                                                    <canvas id="piechart"></canvas>

                                                    <div id="pie-legend" class="legend"></div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane  fade in referrals_data" id="referrals">
                                                    <ul>
                                                        <li>
                                                            <p class="site">google.com</p>
                                                            <p class="visit"><span>visitors:</span>250</p>
                                                        </li>

                                                        <li>
                                                            <p class="site">dribbble.com</p>
                                                            <p class="visit"><span>visitors:</span>450</p>
                                                        </li>

                                                        <li>
                                                            <p class="site">behance.com</p>
                                                            <p class="visit"><span>visitors:</span>341</p>
                                                        </li>

                                                        <li>
                                                            <p class="site">domain.com</p>
                                                            <p class="visit"><span>visitors:</span>98</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end /.dashboard_module -->
                </div><!-- end /.col-md-6 -->
            </div>
        </div>
    </section>
    <!--================================
            END SIGNUP AREA
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