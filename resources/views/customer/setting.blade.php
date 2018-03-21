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
                            <li class="active"><a href="#">Settings</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Author's Settings</h1>
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
                            <li class="active"><a href="dashboard-setting.html"><span class="lnr lnr-cog"></span>Setting</a></li>
                            <li><a href="dashboard-purchase.html"><span class="lnr lnr-cart"></span>Purchase</a></li>
                            <li><a href="dashboard-add-credit.html"><span class="lnr lnr-dice"></span>Add Credits</a></li>
                            <li><a href="dashboard-statement.html"><span class="lnr lnr-chart-bars"></span>Statements</a></li>
                            <li><a href="dashboard-upload.html"><span class="lnr lnr-upload"></span>Upload Items</a></li>
                            <li><a href="dashboard-manage-item.html"><span class="lnr lnr-briefcase"></span>Manage Items</a></li>
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
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Account Settings</h3>
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <form action="#" class="setting_form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Personal Information <span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set toggle_module collapse in" id="collapse2">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="acname">Account Name<sup>*</sup></label>
                                            <input type="text" id="acname" class="text_field" placeholder="First Name" value="Aazz Tech">
                                        </div>

                                        <div class="form-group">
                                            <label for="usrname">Username <sup>*</sup></label>
                                            <input type="text" id="usrname" class="text_field" placeholder="Account name" value="aazztech">
                                            <p>Your MartPlace URL: https://martplace.com/<span>aazztech</span></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="emailad">Email Address <sup>*</sup></label>
                                            <input type="text" id="emailad" class="text_field" placeholder="Email address" value="contact@aazztech.com">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password <sup>*</sup></label>
                                                    <input type="password" id="password" class="text_field" placeholder="Email address" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="conpassword">Confirm Password <sup>*</sup></label>
                                                    <input type="password" id="conpassword" class="text_field" placeholder="re-enter password" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="password" id="website" class="text_field" placeholder="Website" >
                                        </div>

                                        <div class="form-group">
                                            <label for="country">Country <sup>*</sup></label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="country" class="text_field">
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
                                            <label for="prohead">Profile Heading</label>
                                            <input type="text" id="prohead" class="text_field" placeholder="Ex: Webdesign & Development Service">
                                        </div>

                                        <div class="form-group">
                                            <label for="authbio">Author Bio</label>
                                            <textarea name="author_bio" id="authbio" class="text_field" placeholder="Short brief about yourself or your account..."></textarea>
                                        </div>
                                    </div><!-- end /.information_wrapper -->
                                </div><!-- end /.information__set -->
                            </div><!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Biling Information <span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set toggle_module collapse" id="collapse1">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">First Name <sup>*</sup></label>
                                                    <input type="text" id="first_name" class="text_field" placeholder="First Name" value="Ron">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">last Name <sup>*</sup></label>
                                                    <input type="text" id="last_name" class="text_field" placeholder="last name" value="Doe">
                                                </div>
                                            </div>
                                        </div><!-- end /.row -->

                                        <div class="form-group">
                                            <label for="email">Company Name<sup>*</sup></label>
                                            <input type="text" id="email" class="text_field" placeholder="AazzTech" value="AazzTech">
                                        </div>

                                        <div class="form-group">
                                            <label for="email1">Email Adress <sup>*</sup></label>
                                            <input type="text" id="email1" class="text_field" placeholder="Email address" value="contact@aazztech.com">
                                        </div>

                                        <div class="form-group">
                                            <label for="country1">Country <sup>*</sup></label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="country" class="text_field">
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
                                                    <label for="city">City / State <sup>*</sup></label>
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
                                                    <label for="zipcode">Zip / Postal Code <sup>*</sup></label>
                                                    <input type="text" id="zipcode" class="text_field" placeholder="zip/postal code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end /.information__set -->
                            </div><!-- end /.information_module -->
                        </div><!-- end /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Profile Image & Cover <span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                    <div class="information_wrapper">
                                        <div class="profile_image_area">
                                            <img src="images/authplc.png" alt="Author profile area">
                                            <div class="img_info">
                                                <p class="bold">Profile Image</p>
                                                <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                            </div>

                                            <label for="cover_photo" class="upload_btn">
                                                <input type="file" id="cover_photo">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                            </label>
                                        </div>

                                        <div class="prof_img_upload">
                                            <p class="bold">Cover Image</p>
                                            <img src="images/cvrplc.jpg" alt="The great warrior of China">

                                            <div  class="upload_title">
                                                <p>JPG, GIF or PNG 750x370 px</p>
                                                <label for="dp" class="upload_btn">
                                                    <input type="file" id="dp">
                                                    <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Social Profiles <span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set social_profile toggle_module collapse " id="collapse5">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-facebook"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.facebook.com/aazztech">
                                            </div>
                                        </div><!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.twitter.com/aazztech">
                                            </div>
                                        </div><!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-google-plus"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.google.com/aazztech">
                                            </div>
                                        </div><!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-behance"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.behance.com/aazztech">
                                            </div>
                                        </div><!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-dribbble"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.dribbble.com/aazztech">
                                            </div>
                                        </div><!-- end /.social__single -->
                                    </div><!-- end /.information_wrapper -->
                                </div><!-- end /.social_profile -->
                            </div><!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Email Settings <span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set mail_setting toggle_module collapse" id="collapse4">
                                    <div class="information_wrapper">
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                            <label for="opt1">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Rating Reminders</span>
                                                <span class="desc">Send an email reminding me to rate an item after purchase</span>
                                            </label>
                                        </div><!-- end /.custom-radio -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt2" class="" name="mail_update_noti" checked>
                                            <label for="opt2">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Update Notifications</span>
                                                <span class="desc">Send an email when an item I've purchased is updated</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt3" class="" name="mail_comment_noti" checked>
                                            <label for="opt3">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Comment Notifications</span>
                                                <span class="desc">Send me an email when someone comments on one of my items</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt4" class="" name="mail_item_review_noti" checked>
                                            <label for="opt4">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Review Notifications</span>
                                                <span class="desc">Send me an email when my items are approved or rejected</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt5" class="" name="mail_review_noti" checked>
                                            <label for="opt5">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Buyer Review Notifications</span>
                                                <span class="desc">Send me an email when someone leaves a review with their rating</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt6" class="" name="mail_support_noti" checked>
                                            <label for="opt6">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Support Notifications</span>
                                                <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt7" class="" name="mail_weekly">
                                            <label for="opt7">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Weekly Summary Emails</span>
                                                <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt8" class="" name="mail_newsletter">
                                            <label for="opt8">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">MartPlace Newsletter</span>
                                                <span class="desc">Get update about latest news, update and more.</span>
                                            </label>
                                        </div><!-- end /.custom_checkbox -->
                                    </div><!-- end /.information_wrapper -->
                                </div><!-- end /.information_module -->
                            </div><!-- end /.information_module -->
                        </div><!-- end /.col-md-6 -->

                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">Save Change</button>
                            </div>
                        </div><!-- end /.col-md-12 -->
                    </div><!-- end /.row -->
                </form><!-- end /form -->
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