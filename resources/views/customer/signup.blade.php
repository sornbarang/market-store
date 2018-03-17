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
                        <li class="active"><a href="#">Signup</a></li>
                    </ul>
                </div>
                <h1 class="page-title">Sign up</h1>
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
<section class="signup_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                            <p>Please fill the following fields with appropriate information
                                to register a new MartPlace account.</p>
                        </div><!-- end .login_header -->

                        <div class="login--form">

                            <div class="form-group">
                                <label for="urname">Your Name</label>
                                <input id="urname" type="text" class="text_field" placeholder="Enter your Name">
                            </div>

                            <div class="form-group">
                                <label for="email_ad">Email Address</label>
                                <input id="email_ad" type="text" class="text_field" placeholder="Enter your email address">
                            </div>

                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input id="user_name" type="text" class="text_field" placeholder="Enter your username...">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="text" class="text_field" placeholder="Enter your password...">
                            </div>

                            <div class="form-group">
                                <label for="con_pass">Confirm Password</label>
                                <input id="con_pass" type="text" class="text_field" placeholder="Confirm password">
                            </div>

                            <button class="btn btn--md btn--round register_btn" type="submit">Register Now</button>

                            <div class="login_assist">
                                <p>Already have an account? <a href="{{url('c2c/temp/customer')}}">Login</a></p>
                            </div>
                        </div><!-- end .login--form -->
                    </div><!-- end .cardify -->
                </form>
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
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