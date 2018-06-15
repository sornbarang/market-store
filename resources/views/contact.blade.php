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
        START AFFILIATE AREA
    =================================-->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>@lang('contact.howcanihelpu')</h1>
                                <p>@lang('contact.contactdesc')</p>
                            </div>
                        </div><!-- end /.col-md-12 -->
                    </div><!-- end /.row -->

                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-phone"></span>
                                <h4 class="tiles__title">@lang('contact.phone')</h4>
                                <div class="tiles__content">
                                    <p>1-800-643-4500</p>
                                    <p>1-800-643-4500</p>
                                </div>
                            </div><!-- end /.contact_tile -->
                        </div><!-- end /.col-md-4 -->

                        <div class="col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-inbox"></span>
                                <h4 class="tiles__title">@lang('contact.emailaddress')</h4>
                                <div class="tiles__content">
                                    <p>support@aazztech.com</p>
                                    <p>support@aazztech.com</p>
                                </div>
                            </div><!-- end /.contact_tile -->
                        </div><!-- end /.col-md-4 -->

                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h3>@lang('contact.leavemessage')</h3>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="contact_form--wrapper">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text"  placeholder="@lang('contact.name')">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="@lang('contact.emailaddress')">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="@lang('contact.phone')">
                                                        </div>
                                                    </div> 
                                                </div>

                                                <textarea cols="30" rows="10" placeholder="@lang('contact.des')"></textarea>

                                                <div class="sub_btn">
                                                    <button type="button" class="btn btn--round btn--default">@lang('contact.sent')</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- end /.col-md-8 -->
                                </div><!-- end /.row -->
                            </div><!-- end /.contact_form -->
                        </div><!-- end /.col-md-12 -->
                    </div><!-- end /.row -->
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop