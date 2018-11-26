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
    <!--================================
            END DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
    
        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>@lang('profileinvoice.invoice')</h3>
                                </div>
                            </div>

                            <div class="pull-right">
                                <a target="_blank" href="{{route('market.viewpdf')}}" class="btn btn--round print_btn">
                                    <span class="lnr lnr-printer"></span>@lang('profileinvoice.print')</a>
                                <a href="{{route('market.downloadpdf')}}" class="btn btn--round btn--sm">@lang('profileinvoice.download')</a>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="invoice">
                            <div class="invoice__head">
                                <div class="invoice_logo">
                                    <img src="images/logo.png" alt="">
                                </div>

                                <div class="info">
                                    <h4>@lang('profileinvoice.invoiceinfo')</h4>
                                    <p>@lang('profileinvoice.order') # MP810094</p>
                                </div>
                            </div>
                            <!-- end /.invoice__head -->

                            <div class="invoice__meta">
                                <div class="address">
                                    <h5 class="bold">AazzTech</h5>
                                    <p>1355 Market Street, Suite 900</p>
                                    <p>San Francisco, CA 94103</p>
                                    <p>United States</p>
                                </div>

                                <div class="date_info">
                                    <p>
                                        <span>@lang('profileinvoice.invoicedate')</span>May 05, 2017</p>
                                    <p>
                                        <span>@lang('profileinvoice.duedate')</span>May 10, 2017</p>
                                    <p class="status">
                                        <span>@lang('profileinvoice.status')</span>Sale</p>
                                </div>
                            </div>
                            <!-- end /.invoice__meta -->

                            <div class="invoice__detail">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>@lang('profileinvoice.date')</th>
                                                <th>@lang('profileinvoice.name')</th>
                                                <th>@lang('profileinvoice.item')</th>
                                                <th>@lang('profileinvoice.license')</th>
                                                <th>@lang('profileinvoice.unitcost')</th>
                                                <th>@lang('profileinvoice.total')</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>03 Jul 2017</td>
                                                <td class="author">AazzTech</td>
                                                <td class="detail">
                                                    <a href="#">Multipurpose Blog Template</a>
                                                </td>
                                                <td>Regular</td>
                                                <td>$30</td>
                                                <td>$30</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pricing_info">
                                    <p>@lang('profileinvoice.subamount'): $30</p>
                                    <p class="bold">@lang('profileinvoice.total') : $30</p>
                                </div>
                            </div>
                            <!-- end /.invoice_detail -->
                        </div>
                        <!-- end /.invoice -->


                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
    </section>
    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop