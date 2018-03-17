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
                            <li class="active"><a href="#">Login</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Login</h1>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->
<!--================================
        START LOGIN AREA
=================================-->
<section class="login_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome Back</h3>
                            <p>You can sign in with your username</p>
                        </div><!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input id="user_name" type="text" class="text_field" placeholder="Enter your username...">
                            </div>

                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input id="pass" type="text" class="text_field" placeholder="Enter your password...">
                            </div>

                            <div class="form-group">
                                <div class="custom_checkbox">
                                    <input type="checkbox" id="ch2">
                                    <label for="ch2"><span class="shadow_checkbox"></span><span class="label_text">Remember me</span></label>
                                </div>
                            </div>

                            <button class="btn btn--md btn--round" type="submit">Login Now</button>

                            <div class="login_assist">
                                <p class="recover">Lost your <a href="pass-recovery.html">username</a> or <a href="pass-recovery.html">password</a>?</p>
                                <p class="signup">Don't have an <a href="{{url('c2c/temp/signup')}}">account</a>?</p>
                            </div>
                        </div><!-- end .login--form -->
                    </div><!-- end .cardify -->
                </form>
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
<!--================================
        END LOGIN AREA
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