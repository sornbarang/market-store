@extends('layouts.app-layout')
@section('content') 
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
    <section class="dashboard-area">
        @include('elements.customer-menu')
        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>@lang('profilesale.salestatement')</h3>
                                <div class="date_area">
                                    <form action="#">
                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="@lang('profilesale.from')">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>

                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="@lang('profilesale.to')">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                        <div class="select-wrap">
                                            <select name="transaction_type" id="#">
                                                <option value="0">@lang('profilesale.salestatement')</option>
                                                <option value="1">Sale</option>
                                                <option value="2">Purchase</option>
                                                <option value="3">Withdraw</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>

                                        <button type="submit" class="btn btn--sm btn--round btn--color1">@lang('profilesale.search')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-3 col-sm-3 offset-md-3">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-tag icon mcolorbg1"></span>
                                <div class="info">
                                    <p>$4,563</p>
                                    <span>@lang('profilesale.totalsale')</span>
                                </div>
                            </div><!-- end /.info_wrap -->
                        </div><!-- end /.statement_info_card -->
                    </div><!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-3">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-cart icon mcolorbg2"></span>
                                <div class="info">
                                    <p>$340</p>
                                    <span>@lang('profilesale.totalpurchase')</span>
                                </div>
                            </div><!-- end /.info_wrap -->
                        </div><!-- end /.statement_info_card -->
                    </div><!-- end /.col-md-3 -->
                    {{--
                    <div class="col-md-3 col-sm-3">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-dice icon mcolorbg3"></span>
                                <div class="info">
                                    <p>$4,563</p>
                                    <span>Total Sales</span>
                                </div>
                            </div><!-- end /.info_wrap -->
                        </div><!-- end /.statement_info_card -->
                    </div><!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-3">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-briefcase icon mcolorbg4"></span>
                                <div class="info">
                                    <p>$3,690</p>
                                    <span>Total Withdraw</span>
                                </div>
                            </div><!-- end /.info_wrap -->
                        </div><!-- end /.statement_info_card -->
                    </div><!-- end /.col-md-3 -->
                    --}}
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>@lang('profilesale.date')</th>
                                    <th>@lang('profilesale.orderid')</th>
                                    <th>@lang('profilesale.author')</th>
                                    <th>@lang('profilesale.detail')</th>
                                    <th>@lang('profilesale.type')</th>
                                    <th>@lang('profilesale.price')</th>
                                    <th>@lang('profilesale.earning')</th>
                                    <th>@lang('profilesale.action')</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">AazzTech</td>
                                        <td class="detail"><a href="single-product.html">Visibility Manager Subscriptions</a></td>
                                        <td class="type"><span class="sale">Sale</span></td>
                                        <td>$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action"><a href="invoice.html">@lang('profilesale.view')</a></td>
                                    </tr>

                                    <tr>
                                        <td>03 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Markober</td>
                                        <td class="detail"><a href="single-product.html">Martplace Coffee Shop</a></td>
                                        <td class="type"><span class="purchase">Purchase</span></td>
                                        <td>$30</td>
                                        <td class="earning subtract">-$30</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Themexylum</td>
                                        <td class="detail"><a href="single-product.html">MartPlace Extension Bundle</a></td>
                                        <td class="type"><span class="sale">Sale</span></td>
                                        <td>$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>05 Apr 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">AazzTech</td>
                                        <td class="detail"><a href="single-product.html">Stack - Responsive Bootstrap 4 Admin Template</a></td>
                                        <td class="type"><span class="sale">Sale</span></td>
                                        <td>$20</td>
                                        <td class="earning">$10</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>25 Dec 2016</td>
                                        <td>MP810394</td>
                                        <td class="author text-center" colspan="2">Via Payoneer</td>
                                        <td class="type"><span class="credited">Credited</span></td>
                                        <td>$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author text-center" colspan="2">Via Paypal</td>
                                        <td class="type"><span class="withdrawal">Withdraw</span></td>
                                        <td>$350</td>
                                        <td class="earning subtract">-$350</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>0 Feb 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Artcorner</td>
                                        <td class="detail"><a href="single-product.html">Rida - Applanding Onepage </a></td>
                                        <td class="type"><span class="purchase">Purchase</span></td>
                                        <td>$30</td>
                                        <td class="earning subtract">-$30</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>26 May 2016</td>
                                        <td>MP81024</td>
                                        <td class="author">Awesomaiya</td>
                                        <td class="detail"><a href="single-product.html">Table Generator extension bundle</a></td>
                                        <td class="type"><span class="sale">Sale</span></td>
                                        <td>$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>26 Aug 2017</td>
                                        <td>MP810654</td>
                                        <td class="author">Codepoets</td>
                                        <td class="detail"><a href="single-product.html">Kamla One page portfolio</a></td>
                                        <td class="type"><span class="sale">Sale</span></td>
                                        <td>$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Designing</td>
                                        <td class="detail"><a href="single-product.html">Ajaxified karma loader</a></td>
                                        <td class="type"><span class="purchase">Purchased</span></td>
                                        <td>$29</td>
                                        <td class="earning">-$29</td>
                                        <td class="action"><a href="invoice.html">view</a></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
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
                    </div>
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
    @include('elements.joinshop')

    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop