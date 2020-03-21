@extends('layouts.app-layout')
@section('content') 
<!--================================
    START BREADCRUMB AREA
=================================-->
{{--<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">@lang('authlabel.home')</a></li>
                        <li class="active"><a href="#">Signup</a></li>
                    </ul>
                </div>
                <h1 class="page-title">Sign up</h1>
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>--}}
<!--================================
    END BREADCRUMB AREA
=================================-->

<!--================================
        START SIGNUP AREA
=================================-->
<section class="signup_area section--padding2 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>@lang('authlabel.createaccount')</h3>
                            <p>@lang('authlabel.registerinfo')</p>
                        </div><!-- end .login_header -->

                        <div class="login--form">

                            <div class="form-group">
                                <label for="urname">@lang('authlabel.name') <span class="text-danger">  *</span></label>
                                <input id="name" type="text" class="text_field form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="@lang('authlabel.name')">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @else
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email_ad">@lang('authlabel.email') <span class="text-danger">  *</span></label>
                                <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" type="email" class="text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required  placeholder="@lang('authlabel.emailplaceholder')">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @else
                                    <div class="invalid-feedback">
                                        Please check your email address.
                                    </div> 
                                @endif
                            </div>
                            {{--
                            <div class="form-group">
                                <label for="user_name">@lang('authlabel.username') <span class="text-danger">  *</span></label>
                                <input name="username" id="user_name" type="text" class="text_field" placeholder="@lang('authlabel.usrplaceholder')" require>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="user_phone">@lang('authlabel.phone')</label>
                                <input name="phone" id="user_phone" type="text" class="text_field" placeholder="@lang('authlabel.phoneplaceholder')">
                            </div>
                            <div class="form-group">
                                <label for="address">@lang('authlabel.address')</label>
                                <input name="address" id="address" type="text" class="text_field" placeholder="@lang('authlabel.addressplaceholder')">
                            </div>--}}
                            <div class="form-group">
                                <label for="password">@lang('authlabel.password') <span class="text-danger">  *</span></label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="@lang('authlabel.passplaceholder')">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @else 
                                    <div class="invalid-feedback">
                                        Please enter your password.
                                    </div>
                                @endif
                            </div>

                            <div class="form-group"> 
                                <label for="con_pass">@lang('authlabel.conpass') <span class="text-danger">  *</span></label>
                                <input require id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="@lang('authlabel.conpass')"> 
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customTermCon" required>
                                <label class="custom-control-label" for="customTermCon">Agree to terms and conditions</label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div> 
                            <button class="btn btn--md btn--round register_btn m-0" type="submit">@lang('authlabel.register')</button>
                            <div class="social social--color--filled login_assist">
                                <ul>
                                    <li><a href="{{ route('socialite.auth', ['provider' => 'facebook']) }}" title="Sign in with facebook"><span class="fa fa-facebook"></span></a></li> 
                                    <li><a href="{{ route('socialite.auth', ['provider' => 'google']) }}" title="Sign in with google"><span class="fa fa-google-plus"></span></a></li> 
                                </ul>
                            </div>
                            <div class="login_assist">
                                <p>@lang('authlabel.noaccount') <a href="{{url( app()->getLocale().'/login')}}">@lang('authlabel.login')</a></p>
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
{{--<section class="call-to-action bgimage">
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
</section>--}}
<!--================================
    END CALL TO ACTION AREA
=================================--> 
@stop