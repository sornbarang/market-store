@extends('layouts.shop-layout')
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
<section class="dashboard-area">
    <div class="dashboard_contents">
        <div class="container">
            <form action="#" class="setting_form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Biling Information </h4>
                            </div>

                            <div class="information__set">
                                <div class="information_wrapper form--fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="first_name" class="text_field" placeholder="First Name" value="Ron">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">last Name
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="last_name" class="text_field" placeholder="last name" value="Doe">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.row -->

                                    <div class="form-group">
                                        <label for="email">Company Name
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="email" class="text_field" placeholder="AazzTech" value="AazzTech">
                                    </div>

                                    <div class="form-group">
                                        <label for="email1">Email Adress
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="email1" class="text_field" placeholder="Email address" value="contact@aazztech.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="country1">Country
                                            <sup>*</sup>
                                        </label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="country" id="country1" class="text_field">
                                                <option value="">Select one</option>
                                                <option value="bangladesh">Bangladesh</option>
                                                <option value="india">India</option>
                                                <option value="uruguye">Uruguye</option>
                                                <option value="australia">Australia</option>
                                                <option value="neverland">Neverland</option>
                                                <option value="atlantis">Atlantis</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="address1">Address Line 1</label>
                                        <input type="text" id="address1" class="text_field" placeholder="Address line one">
                                    </div>

                                    <div class="form-group">
                                        <label for="address2">Address Line 2</label>
                                        <input type="text" id="address2" class="text_field" placeholder="Address line two">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City / State
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="city" id="city" class="text_field">
                                                        <option value="">Select one</option>
                                                        <option value="dhaka">Dhaka</option>
                                                        <option value="sydney">Sydney</option>
                                                        <option value="newyork">New York</option>
                                                        <option value="london">London</option>
                                                        <option value="mexico">New Mexico</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="zipcode">Zip / Postal Code
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="zipcode" class="text_field" placeholder="zip/postal code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-lg-6">
                        <div class="information_module order_summary">
                            <div class="toggle_title">
                                <h4>Order Summary</h4>
                            </div>

                            <ul>
                                <li class="item">
                                    <a href="single-product.html" target="_blank">Finance and Consulting Business Theme</a>
                                    <span>$60</span>
                                </li>
                                <li class="item">
                                    <a href="single-product.html" target="_blank">Visibility Manager Subscriptions</a>
                                    <span>$60</span>
                                </li>
                                <li>
                                    <p>Estimated Taxes & Fees:</p>
                                    <span>$2</span>
                                </li>
                                <li class="total_ammount">
                                    <p>Total</p>
                                    <span>$122.00</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.information_module-->

                        <div class="information_module payment_options">
                            <div class="toggle_title">
                                <h4>Select Payment Method</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>Comming Soon</label>
                                    </div>
                                </li>

                                {{--<li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>Paypal</label>
                                    </div>
                                    <img src="{{asset('images/paypal.png')}}" alt="Visa Cards">
                                </li>--}}
                                <li>
                                    <button type="submit" class="btn btn--round btn--default">Confirm Order</button>
                                </li>
                            </ul>
                            {{--<ul>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt1" class="" name="filter_opt">
                                        <label for="opt1">
                                            <span class="circle"></span>Credit Card</label>
                                    </div>
                                    <img src="{{asset('images/cards.png')}}" alt="Visa Cards">
                                </li>

                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>Paypal</label>
                                    </div>
                                    <img src="{{asset('images/paypal.png')}}" alt="Visa Cards">
                                </li>

                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt3" class="" name="filter_opt">
                                        <label for="opt3">
                                            <span class="circle"></span>Martplace Credit</label>
                                    </div>
                                    <p>Balance
                                        <span class="bold">$180</span>
                                    </p>
                                </li>
                            </ul>--}}

                            {{--<div class="payment_info modules__content">
                                <div class="form-group">
                                    <label for="card_number">Card Number</label>
                                    <input id="card_number" type="text" class="text_field" placeholder="Enter your card number here...">
                                </div>

                                <!-- lebel for date selection -->
                                <label for="name">Expire Date</label>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="select-wrap select-wrap2">
                                                <select name="months" id="name">
                                                    <option value="">Month</option>
                                                    <option value="jan">jan</option>
                                                    <option value="feb">Feb</option>
                                                    <option value="mar">Mar</option>
                                                    <option value="apr">Apr</option>
                                                    <option value="may">May</option>
                                                    <option value="jun">Jun</option>
                                                    <option value="jul">Jul</option>
                                                    <option value="aug">Aug</option>
                                                    <option value="sep">Sep</option>
                                                    <option value="oct">Oct</option>
                                                    <option value="nov">Nov</option>
                                                    <option value="dec">Dec</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                            <!-- end /.select-wrap -->
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6-->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="select-wrap select-wrap2">
                                                <select name="years" id="years">
                                                    <option value="">Year</option>
                                                    <option value="28">2028</option>
                                                    <option value="27">2027</option>
                                                    <option value="26">2026</option>
                                                    <option value="25">2025</option>
                                                    <option value="24">2024</option>
                                                    <option value="23">2023</option>
                                                    <option value="22">2022</option>
                                                    <option value="21">2021</option>
                                                    <option value="20">2020</option>
                                                    <option value="19">2019</option>
                                                    <option value="18">2018</option>
                                                    <option value="17">2017</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                            <!-- end /.select-wrap -->
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6-->
                                </div>
                                <!-- end /.row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cv_code">CVV Code</label>
                                            <input id="cv_code" type="text" class="text_field" placeholder="Enter code here...">
                                        </div>

                                        <button type="submit" class="btn btn--round btn--default">Confirm Order</button>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                        <!-- end /.information_module-->
                    </div>
                    <!-- end /.col-md-6 -->
                </div>
                <!-- end /.row -->
            </form>
            <!-- end /form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
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