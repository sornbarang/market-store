<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Market Advertise') }}</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lnr-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    
    @if( app()->getLocale()=='km')
        <link href="https://fonts.googleapis.com/css?family=Kantumruy:400" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style-kh.css') }}">
    @endif 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
</head>
<body class="home3">
@php 
    $avatar='';
@endphp
<!--================================
        START MENU AREA
    =================================-->
<!-- start menu-area -->
<div class="menu-area">
    <!-- start .top-menu-area -->
    <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 col-md-3 col-6 v_middle">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{asset('/')}}images/logo.png" alt="logo image" class="img-fluid">
                        </a>
                        
                    </div>
                </div>
                <!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                    <!-- start .author-area -->
                    <div class="author-area">
                        @if (Route::has('login'))
                            @auth
                            <a class="author-area__seller-btn inline" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                @lang('authlabel.logout')
                                </a> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{route('login')}}" class="author-area__seller-btn inline">@lang('authlabel.login')</a> 
                                @endauth 
                        @endif
                            <div class="inline">
                                <div class="has_dropdown">
                                    <button class="btn btn--icon btn-sm btn-info">
                                    @if( app()->getLocale()=='km')
                                        <span class="flag-icon flag-icon-kh"></span>
                                    @else
                                        <span class="flag-icon flag-icon-gb"></span>
                                    @endif 
                                        {{ config('translatable.locales')[app()->getLocale()] }}</button>
                                    <div class="dropdown dropdown--author">
                                        <ul>
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                @if ($localeCode != LaravelLocalization::getCurrentLocale())
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            @if( $localeCode =='km')
                                                                <span class="flag-icon flag-icon-kh"></span>
                                                            @else
                                                                <span class="flag-icon flag-icon-gb"></span>
                                                            @endif
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        <div class="author__notification_area">
                            <ul>
                            <li class="has_dropdown">
                                    &nbsp;
                                    {{--
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="notification_count purch">2</span>
                                    </div>

                                    <div class="dropdown dropdown--cart">
                                        <div class="cart_area">
                                            <div class="cart_product">
                                                <div class="product__info">
                                                    <div class="thumbn">
                                                        <img src="{{asset('/')}}images/capro1.jpg" alt="cart product thumbnail">
                                                    </div>

                                                    <div class="info">
                                                        <a class="title" href="single-product.html">Finance and Consulting Business Theme</a>
                                                        <div class="cat">
                                                            <a href="#">
                                                                <img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product__action">
                                                    <a href="#">
                                                        <span class="lnr lnr-trash"></span>
                                                    </a>
                                                    <p>$60</p>
                                                </div>
                                            </div>
                                            <div class="cart_product">
                                                <div class="product__info">
                                                    <div class="thumbn">
                                                        <img src="{{asset('/')}}images/capro2.jpg" alt="cart product thumbnail">
                                                    </div>

                                                    <div class="info">
                                                        <a class="title" href="single-product.html">Flounce - Multipurpose OpenCart Theme</a>
                                                        <div class="cat">
                                                            <a href="#">
                                                                <img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product__action">
                                                    <a href="#">
                                                        <span class="lnr lnr-trash"></span>
                                                    </a>
                                                    <p>$60</p>
                                                </div>
                                            </div>
                                            <div class="total">
                                                <p>
                                                    <span>Total :</span>$80</p>
                                            </div>
                                            <div class="cart_action">
                                                <a class="go_cart" href="cart.html">View Cart</a>
                                                <a class="go_checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    --}}
                                </li>
                            </ul>
                        </div>
                        <!--start .author__notification_area -->
                        @if (Route::has('login')) 
                            @auth
                                @php
                                    $media = (Auth::user()->profile != null) ? Auth::user()->profile->getMedia() : [];
                                    foreach($media as $val){
                                        if(Auth::user()->profile->avatar==$val->id){
                                            $avatar=$val->id.'/avatar.png';
                                        }
                                    }
                                @endphp
                            @else
                            @endauth 
                        @endif 
                        <!--start .author-author__info-->
                        {{--<div class="author-author__info inline has_dropdown">
                            <div class="author__avatar">
                            @if(isset($avatar) && !empty($avatar))
                                <img src="{{Storage::url($avatar)}}" alt="user avatar" style="border-radius:50%;">
                            @else
                                <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">
                            @endif
                            </div>
                            <div class="autor__info">
                                <p class="name">
                                @if (Route::has('login'))
                                    @auth
                                        {{ Auth::user()->name }}
                                    @else
                                        guest
                                    @endauth
                                @endif
                                </p>
                                <p class="ammount">$20.45</p>
                            </div>
                            @if (Route::has('login'))
                                    @auth
                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <a href="{{route('market.myprofile')}}">
                                                        <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('market.mysetting')}}">
                                                        <span class="lnr lnr-cog"></span> @lang('profile.setting')</a>
                                                </li>
                                                --}}{{--
                                                <li>
                                                    <a href="{{route('market.customer.index')}}">
                                                        <span class="lnr lnr-home"></span> @lang('profile.dashboard')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('market.mycart')}}">
                                                        <span class="lnr lnr-cart"></span>@lang('profile.purchase')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('market.myfavorite')}}">
                                                        <span class="lnr lnr-heart"></span> @lang('profile.favourite')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('market.mysale')}}">
                                                        <span class="lnr lnr-chart-bars"></span>@lang('profile.salemanage')</a>
                                                </li>
                                                --}}{{--
                                                <li>
                                                    <a href="{{route('market.myitemupload')}}">
                                                        <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('market.mymanageitem')}}">
                                                        <span class="lnr lnr-book"></span>@lang('profile.manageitems')</a>
                                                </li>
                                                @if (Route::has('login'))
                                                    @auth
                                                        @hasrole('admin')
                                                        <li>
                                                            <a href="{{route('admin')}}">
                                                                <span class="lnr lnr-briefcase"></span>@lang('profile.backoffice')</a>
                                                        </li>
                                                        @endhasrole
                                                    @endauth
                                                @endif
                                                <li>
                                                    <a class="lnr lnr-exit" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                        @lang('profile.logout')
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    @endauth
                                @endif

                        </div>--}}
                        <!--end /.author-author__info-->
                    </div>
                    <!-- end .author-area -->

                    <!-- author area restructured for mobile -->
                    <div class="mobile_content " style="display: inline-block;float: right;">
                        <div class="inline customerswitch" style="line-height:60px;">
                            <button id="drop2" class="btn btn--icon btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                @if( app()->getLocale()=='km')
                                    <span class="flag-icon flag-icon-kh"></span>
                                @else
                                    <span class="flag-icon flag-icon-gb"></span>
                                @endif
                            </button>

                            <ul class="custom_dropdown messaging_dropdown dropdown-menu" aria-labelledby="drop2">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if ($localeCode != LaravelLocalization::getCurrentLocale())
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            @if( $localeCode =='km')
                                                <span class="flag-icon flag-icon-kh" style="float: left; top: 8px;margin-right: 5px;"></span>
                                            @else
                                                <span class="flag-icon flag-icon-gb" style="float: left; top: 8px;margin-right: 5px;"></span>
                                            @endif
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                        <span class="lnr lnr-user menu_icon" style="margin-left:5px;"></span> 
                        <!-- offcanvas menu -->
                        <div class="offcanvas-menu closed">
                            <span class="lnr lnr-cross close_menu"></span>
                            <div class="author-author__info">
                                <div class="author__avatar v_middle">
                                    @if(isset($avatar) && !empty($avatar))
                                        <img src="{{Storage::url($avatar)}}" alt="user avatar" style="border-radius:50%;">
                                    @else
                                    <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">
                                    @endif
                                </div>
                                <div class="autor__info v_middle">
                                    @if (Route::has('login'))
                                        @auth
                                            <p class="name">
                                                {{ Auth::user()->name }}
                                            </p>
                                        @else
                                            guest
                                        @endauth
                                    @endif    
                                
                                    {{--<p class="ammount">$20.45</p>--}}
                                </div>
                            </div>
                            <!--end /.author-author__info-->

                            <div class="author__notification_area">
                                <ul>
                                    {{--<li>
                                        <a href="notification.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-alarm"></span>
                                                <span class="notification_count noti">25</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="message.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-envelope"></span>
                                                <span class="notification_count msg">6</span>
                                            </div>
                                        </a>
                                    </li>--}}
                                    {{--
                                    <li>
                                        <a href="cart.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span>
                                                <span class="notification_count purch">2</span>
                                            </div>
                                        </a>
                                    </li>--}}
                                </ul>
                            </div>
                            <!--start .author__notification_area -->
                            @if (Route::has('login'))
                                    @auth
                                    <div class="dropdown dropdown--author">
                                        <ul>
                                        <li>
                                            <a href="{{route('market.myprofile')}}">
                                                <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('market.mysetting')}}">
                                                    <span class="lnr lnr-cog"></span> @lang('profile.setting')</a>
                                            </li>
                                            {{--
                                            <li>
                                                <a href="{{route('market.customer.index')}}">
                                                    <span class="lnr lnr-home"></span> @lang('profile.dashboard')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('market.mycart')}}">
                                                    <span class="lnr lnr-cart"></span>@lang('profile.purchase')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('market.myfavorite')}}">
                                                    <span class="lnr lnr-heart"></span> @lang('profile.favourite')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('market.mysale')}}">
                                                    <span class="lnr lnr-chart-bars"></span>@lang('profile.salemanage')</a>
                                            </li>
                                            --}}
                                            <li>
                                                <a href="{{route('market.myitemupload')}}">
                                                    <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('market.mymanageitem')}}">
                                                    <span class="lnr lnr-book"></span>@lang('profile.manageitems')</a>
                                            </li> 
                                            <li>
                                                @if (Route::has('login'))
                                                    @auth
                                                        @hasrole('admin')
                                                            <li>
                                                                <a href="{{route('admin')}}"><span class="lnr lnr-briefcase"></span>@lang('profile.backoffice')</a>
                                                            </li>
                                                        @endhasrole
                                                    @endauth
                                                @endif
                                            </li>
                                            <li>
                                                <a class="lnr lnr-exit" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                @lang('profile.logout')
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                        <div class="text-center">
                                            <a href="{{route('login')}}" class="author-area__seller-btn inline">@lang('authlabel.login')</a>
                                        </div>
                                    @endauth
                                @endif
                        </div>
                    </div>
                    <!-- end /.mobile_content -->
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->

    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="navbar-header">
                        <!-- start mainmenu__search -->
                        {{--
                        <div class="mainmenu__search">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="@lang('frontlabel.search')">
                                    <button type="submit" class="search-wrap__btn">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        --}}
                        <!-- start mainmenu__search -->
                    </div>

                    <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="has_dropdown">
                                    <a href="{{route('market')}}">@lang('menu.home')</a>
                                    {{--<div class="dropdown dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home Multi Vendor</a>
                                            </li>
                                            <li>
                                                <a href="index-single.html">Home Two Single User</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Home Three Product</a>
                                            </li>
                                        </ul>
                                    </div>--}}
                                </li>
                                <!-- <li>
                                    <a href="#">{{trans('menu.policy')}}</a>
                                </li> -->
                                <li>
                                    <a href="{{ route('termcondiction') }}">{{trans('menu.termcondiction')}}</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">{{trans('menu.contact')}}</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->
<!--================================
    END MENU AREA
=================================-->

    @yield('content')

<!--================================
    START FOOTER AREA
=================================-->
{{--
<footer class="footer-area">
    <!-- hidden footer all auth route -->
@php
    $name = Route::currentRouteName();
@endphp 
@if($name !='login' && $name !='password.request' && $name !='password.request' && $name !='register')
<div class="footer-big section--padding">
    <!-- start .container -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="info-footer">
                    <div class="info__logo">
                        <h3>TreeWB</h3>
                        <!-- <img src="{{asset('/')}}images/flogo.png" alt="footer logo"> -->
                    </div>
                    <p class="info--text">Nunc placerat mi id nisi interdum they mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam.</p>
                    <ul class="info-contact">
                        <li>
                            <span class="lnr lnr-phone info-icon"></span>
                            <span class="info">Phone: +6789-875-2235</span>
                        </li>
                        <li>
                            <span class="lnr lnr-envelope info-icon"></span>
                            <span class="info">support@aazztech.com</span>
                        </li>
                        <li>
                            <span class="lnr lnr-map-marker info-icon"></span>
                            <span class="info">202 New Hampshire Avenue Northwest #100, New York-2573</span>
                        </li>
                    </ul>
                </div><!-- end /.info-footer -->
            </div><!-- end /.col-md-3 -->

            <div class="col-md-5 col-sm-6">
                <div class="footer-menu">
                    <h4 class="footer-widget-title text--white">@lang('footer.ourcompany')</h4>
                    <ul>
                        <li><a href="#">How to Join Us</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">Buying and Selling</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Copyright Notice</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div><!-- end /.footer-menu -->

                <div class="footer-menu">
                    <h4 class="footer-widget-title text--white">@lang('footer.helpandfq')</h4>
                    <ul>
                        <li><a href="#">How to Join Us</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">Buying and Selling</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Copyright Notice</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div><!-- end /.footer-menu -->
            </div><!-- end /.col-md-5 -->

            <div class="col-md-4 col-sm-12">
                <div class="newsletter">
                    <h4 class="footer-widget-title text--white">@lang('footer.newsletter')</h4>
                    <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
                    <div class="newsletter__form">
                        <form action="#">
                            <div class="field-wrapper">
                                <input class="relative-field rounded" type="text" placeholder="Enter email">
                                <button class="btn btn--round" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- start .social -->
                    <div class="social social--color--filled">
                        <ul>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                    <!-- end /.social -->
                </div><!-- end /.newsletter -->
            </div><!-- end /.col-md-4 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</div>
<!-- endfooterbig -->
@endif 
--}}
    <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2018 <a href="#">TreeWB</a>. All rights reserved. Created by <a href="#">TreeWB</a></p>
                        </div>

                        <div class="go_top">
                            <span class="lnr lnr-chevron-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!--================================
    END FOOTER AREA
=================================-->

<!--//////////////////// JS GOES HERE ////////////////-->

<!-- inject:js -->
<script src="{{ asset('js/vendor/jquery/jquery-1.12.3.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="{{ asset('js/vendor/jquery/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/grid.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.easing1.3.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/tether.min.js') }}"></script>
<script src="{{ asset('js/vendor/trumbowyg.min.js') }}"></script>
<script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBeySPFGz7DIUTrReCRQT6HYaMM0ia0knA"></script> -->
<script src="{{ asset('js/map.js') }}"></script>
<script> 
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 
    $(document).on('click', '#deletepro', function(e) {
        $('#frmdeleteproduct').attr('action',$(this).data('route'));
    });
    $('form#frmReport button[type="button"]').on('click',function(){
        $.ajax({
            url: "{{route('market.reportmarket')}}",
            type: 'POST',
            data:{'id':$('#product_id').val(),'reason':$('#myreport').val(),'commemnt_reporter':$('#commemnt_reporter').val()},
            headers: {
                    'X-CSRF-Token':CSRF_TOKEN,
            },
            success: function( msg ) {
                if(msg.status==200){
                    $('form#frmReport button.modal_close').click();
                }
            },
            error: function( data ) {
                console.log(data);
            }
        });
    });
    $('.modal-dialog .card_style2').on('click',function(){
        $('.modal-dialog .card_style2').attr('style','');
        $(this).css({'background':'#56a72d','color':'#fff'});
        $('#myreport').val($(this).text().trim())
    });
    $(document).on('click', 'form#frmupdateprofile button[type=submit]', function(e) {
        var pass=$('form#frmupdateprofile #password').val();
        var cpass=$('form#frmupdateprofile #conpassword').val();
        if(pass != cpass){
            $('form#frmupdateprofile #notmatch').focus().show();
            e.preventDefault(); 
        }
    });
    $(document).on('click', 'form#frmUploadFront button[type=submit]', function(e) {
        var chkconfirmcat=$("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").val();
        //check current last child id
        var chkclcid=$("form#frmUploadFront #currentlastchildid,form#frmUpdateFront #chkclcid").val();
        if(chkconfirmcat ==undefined || chkconfirmcat == 0){
            alert('please tick for next process');  
            $("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").next().find('.shadow_checkbox').css('border','1px solid red');
            $("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").next().find('.label_text').css('color','red');
            $('html, body').animate({
                scrollTop: ($('form#frmUploadFront,form#frmUpdateFront').first().offset().top)
            },500);
            e.preventDefault();
        }
        // $('#frmUploadFront #trumbowyg-demo').html()); 
        $('#frmUploadFront #trumbowyg-demoe-hidden,#frmUpdateFront #trumbowyg-demoe-hidden').val($('#frmUploadFront #trumbowyg-demo,#frmUpdateFront #trumbowyg-demo').html());  
        // e.preventDefault();
        $(this).submit(); 
    });
    $(document).on('click', 'form#frmUpdateFront button[type=submit]', function(e) {
        var chkconfirmcat=$("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").val();
        //check current last child id
        var chkclid=$("form#frmUpdateFront #clid").val();
        if(chkclid == ''){
            if(chkconfirmcat ==undefined || chkconfirmcat == 0){
                alert('please tick for next process');  
                $("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").next().find('.shadow_checkbox').css('border','1px solid red');
                $("form#frmUploadFront #chkconfirm,form#frmUpdateFront #chkconfirm").next().find('.label_text').css('color','red');
                $('html, body').animate({
                    scrollTop: ($('form#frmUploadFront,form#frmUpdateFront').first().offset().top)
                },500);
                e.preventDefault();
            }
        }
        // $('#frmUploadFront #trumbowyg-demo').html()); 
        $('#frmUploadFront #trumbowyg-demoe-hidden,#frmUpdateFront #trumbowyg-demoe-hidden').val($('#frmUploadFront #trumbowyg-demo,#frmUpdateFront #trumbowyg-demo').html());  
        // e.preventDefault();
        $(this).submit(); 
    });
    $(document).ready(function(){ 
        var xhr=null;  
        var isMobile = false; //initiate as false
        // device detection
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
            isMobile = true;
        }
        var locale="{{ app()->getLocale() }}";
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var imguploads=[];
        $('.upload_modules.upload_modules_blog >div.row > div > div > div > input').each(function( index ,elm) {
            imguploads.push('#'+elm.id);
        }); 
        // console.log(imguploads.join(','));
        function readURL(input) {
            if (input.files && input.files[0]) { 
                var reader = new FileReader();
                reader.onload = function(e) {  
                    input.parentElement.nextSibling.nextSibling.childNodes[1].style.backgroundImage = 'url('+e.target.result +')';
                    // $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    // $('#imagePreview').hide();
                    // $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#imageUpload,#imageUpload1,#imageUpload2,#imageUpload3,#imageUpload4').change(function() {
            readURL(this); 
        });
        function getSubCategoryFirstRequest(mythis){
            var this_=mythis;
            xhr=$.ajax({
                url: '{{route("getsubcategory")}}',
                type: 'POST',
                dataType:'json',
                headers: {
                    'X-CSRF-Token':CSRF_TOKEN,
                },
                data:{pid:mythis.data('id')},
                success: function( msg ) {
                    console.log(msg);
                    // clear current product and category
                    $("form#frmUpdateFront #clid").val('');
                    $('form#frmUploadFront .modules__content div.statement_info_card,form#frmUpdateFront .modules__content div.statement_info_card').removeAttr('style');
                    $('form#frmUploadFront .modules__content div.statement_info_card,form#frmUpdateFront .modules__content div.statement_info_card').children().find('.info').children().removeAttr('style');
                    this_.css('background','#56a72d');
                    this_.children().find('.info').children().css('color','#ffff');
                    if(msg.status==true && msg.data.length > 0){
                        $('form#frmUploadFront #lastchildid,form#frmUpdateFront #lastchildid').val('');
                        $('.subcategory').show();
                        // console.log(this_.parent().parent().next().children().children().children()); 
                        this_.parent().parent().parent().nextAll('.subcategory').empty(); 
                        var arrhtml=[];
                        $.each(msg.data, function(k, cat) {
                            // loop lang 
                            for(var i=0;i<cat.translations.length;i++){
                                if(cat.translations[i].locale==locale){
                                    arrhtml+='<div  data-id="'+ cat.translations[i].categories_ads_id +'" class="statement_info_card mb-2"> <div class="info_wrap"> <span class="lnr lnr-list icon mcolorbg1"></span> <div class="info"> <span>' + cat.translations[i].name + '</span> </div> </div> </div>'
                                }
                            } 
                            $('.subcategory').html('<div class="row"><div class="col-12 mb-1"> <label>@lang("profileitemupload.choosesubcat")</label> </div> <div class="col-md-3 lavel1"> '+arrhtml+'</div> </div>');
                        }); 
                        if(isMobile){   
                            $('html, body').animate({
                                scrollTop: $('form#frmUploadFront .subcategory,form#frmUpdateFront .subcategory').offset().top - 100
                            }, 1000)
                        }
                    }else if(msg.status==true && msg.data.length >=0){
                        $('form#frmUploadFront #lastchildid,form#frmUpdateFront #lastchildid').val(this_.data('id'));
                        $('.subcategory').show();
                        this_.parent().parent().parent().nextAll('.subcategory').empty(); 
                        $('.subcategory').html('<div class="row"> <div class="col-md-12 lavel1 text-center"><div class="custom-radio"> <input type="radio" id="yes" class="" name="high_res"><div class="custom_checkbox"> <input type="checkbox" id="chkconfirm" value="0"> <label for="chkconfirm"> <span class="shadow_checkbox"></span> <span class="label_text">Check it to confirm</span></label> </div></div></div> </div>');
                    }
                },
                error: function( data ) {
                    console.log(data);
                }
            });
        }
        function getSubCategoryDynamic(mythis){
            var this_=mythis
            xhr=$.ajax({
                url: '{{route("getsubcategory")}}',
                type: 'POST',
                dataType:'json',
                headers: {
                    'X-CSRF-Token':CSRF_TOKEN,
                },
                data:{pid:mythis.data('id')},
                success: function( msg ) {
                    console.log(msg);
                    // clear current product and category
                    $("form#frmUpdateFront #clid").val('');
                    $('form#frmUploadFront .modules__content div.subcategory div.statement_info_card,form#frmUpdateFront .modules__content div.subcategory div.statement_info_card').removeAttr('style');
                    $('form#frmUploadFront .modules__content div.subcategory div.statement_info_card').children().find('.info').children().removeAttr('style');
                    this_.css('background','#56a72d');
                    this_.children().find('.info').children().css('color','#ffff');
                    if(msg.status==true && msg.data.length > 0){
                        $('form#frmUploadFront #lastchildid,form#frmUpdateFront #lastchildid').val('');
                        this_.parent().nextAll().remove(); 
                        var arrhtml=[];
                        $.each(msg.data, function(k, cat) {
                            // loop lang 
                            for(var i=0;i<cat.translations.length;i++){
                                if(cat.translations[i].locale==locale){
                                    // arrhtml+='<div class="options"><div class="custom-radio"> <input value="'+ cat.translations[i].categories_ads_id +'" type="radio" id="optchildred'+(k+1)+'" class="" name="filter_opt" /> <label for="optchildred'+(k+1)+'"> <span class="circle"></span>' + cat.translations[i].name + '</label> </div> </div>'
                                    arrhtml+='<div data-id="'+ cat.translations[i].categories_ads_id +'" class="statement_info_card mb-2"> <div class="info_wrap"> <span class="lnr lnr-list icon mcolorbg1"></span> <div class="info"> <span>' + cat.translations[i].name + '</span> </div> </div> </div>'
                                }
                            } 
                        }); 
                        if(isMobile){
                            $('form#frmUploadFront .subcategory > div.row,form#frmUpdateFront .subcategory > div.row').append('<div class="col-md-3"><span class="lnr lnr-chevron-down icon" style="font-size: 18px; font-weight: bolder; color: rgb(86, 167, 45); "></span>'+arrhtml+'</div>');
                        }else{
                            $('form#frmUploadFront .subcategory > div.row,form#frmUpdateFront .subcategory > div.row').append('<div class="col-md-3">'+arrhtml+'</div>');
                        } 
                    }else if(msg.status==true && msg.data.length >=0){
                        $('form#frmUploadFront #lastchildid,form#frmUpdateFront #lastchildid').val(this_.data('id'));
                        this_.parent().nextAll().remove();
                        $('form#frmUploadFront .subcategory > div.row,form#frmUpdateFront .subcategory > div.row').append('<div class="col-md-3 text-center"><label>Check it to confirm</label><div class="custom_checkbox"> <input type="checkbox" id="chkconfirm" value="0"> <label for="chkconfirm"> <span class="shadow_checkbox"></span></label> </div></div>');
                    }
                },
                error: function( data ) {
                    console.log(data);
                }
            });
        }
        var user_agent = navigator.userAgent.toLowerCase(); // detect the user agent
        jQuery(document).on('touchstart', function() {
            documentClick = true;
        });
        jQuery(document).on('touchmove', function() {
            documentClick = false;
        });
        var ios_devices = user_agent.match(/(iphone|ipod|ipad)/)  ? "touchend" : "click"; //check if android or ios
        $('form#frmUploadFront .modules__content div.statement_info_card,form#frmUpdateFront .modules__content div.statement_info_card').on(ios_devices,function(e){ 
            e.preventDefault(); 
            if (e.type == "click") documentClick = true; 
            if (documentClick){
                if(xhr==null){
                    getSubCategoryFirstRequest($(this));
                }else{
                    xhr.abort();
                    getSubCategoryFirstRequest($(this));
                }
            }  
        });  
        $( document ).on( ios_devices , "form#frmUploadFront .modules__content div.subcategory div.statement_info_card,form#frmUpdateFront .modules__content div.subcategory div.statement_info_card", function(e){
            e.preventDefault(); 
            if (e.type == "click") documentClick = true; 
            if (documentClick){
                if(xhr==null){
                    getSubCategoryDynamic($(this));
                }else{
                    xhr.abort();
                    getSubCategoryDynamic($(this));
                }
            }  
        } ); 
        $( document ).on( "click", "form#frmUploadFront .custom_checkbox label[for='chkconfirm'],form#frmUpdateFront .custom_checkbox label[for='chkconfirm']", function(e){
            $(this).find('.shadow_checkbox').attr('style','');
            $(this).find('.label_text').attr('style','');
            if ($(this).prev().is(':checked')) { 
                $(this).prev().val('0')
            }else{
                $(this).prev().val('1')
            }
        });
        $( document ).on( "change", ".filter__option.filter--select > .select-wrap > form > select[name='price'],.filter__option.filter--select > .select-wrap > form > select[name='record']", function(e){
            $(this).closest('form').trigger('submit');
            // $.ajax({
            //     url: "{{route('market.reportmarket')}}",
            //     type: 'POST',
            //     data:{orderby:$(this).val()},
            //     headers: {
            //             'X-CSRF-Token':CSRF_TOKEN,
            //     },
            //     success: function( msg ) {
            //         if(msg.status==200){
            //             $('form#frmReport button.modal_close').click();
            //         }
            //     },
            //     error: function( data ) {
            //         console.log(data);
            //     }
            // });
        });
        $( document ).on( "click", "#getProductOfCategory", function(e){  
            var this_=$(this);
            $.ajax({
                url: $(this).data('route'),
                type: 'GET',
                data:{orderby:$(this).val()},
                headers: {
                    'X-CSRF-Token':CSRF_TOKEN,
                },
                success: function( response ) {  
                    var owl=this_.parent().parent().parent().parent().parent().parent().parent().next().children().find('.partners');
                    if(response.length > 0){ 
                        owl.empty();
                        owl.trigger('destroy.owl.carousel');
                        $.each( response, function( key, value ) {
                            var route='{{route("market.productdetail")}}/'+value.products_ads_id; 
                            owl.append('<div class="owl-item" style="width: 255px; margin-right: 30px;"><div class="partner"> <!-- start .single-product --> <div class="product product--card product--card-small"> <div class="product__thumbnail"> <img src="'+value.image+'" alt="Product Image"> <div class="prod_btn"> <a href="'+route+'" class="transparent btn--sm btn--round">More Info</a> </div> <!-- end /.prod_btn --> </div> <!-- end /.product__thumbnail --> <div class="product-desc"> <a href="#" class="product_title"> <h4>'+value.name+'</h4> </a> <ul class="titlebtm"> <li> <img class="auth-img" src="'+value.avatar+'" alt="author image"> <p> <a href="#">'+value.user.name+'</a> </p> </li> <li class="out_of_class_name"> <div class="sell"> <p> <span class="lnr lnr-cart"></span> <span>27</span> </p> </div> <div class="rating product--rating"> <ul> <li> <span class="fa fa-star"></span> </li> <li> <span class="fa fa-star"></span> </li> <li> <span class="fa fa-star"></span> </li> <li> <span class="fa fa-star"></span> </li> <li> <span class="fa fa-star-half-o"></span> </li> </ul> </div> </li> </ul> </div> <!-- end /.product-desc --> <div class="product-purchase"> <div class="price_love"> <span>$'+value.price+'</span> </div> <a href="#"> <span class="lnr lnr-book"></span>Plugin</a> </div> <!-- end /.product-purchase --> </div> <!-- end /.single-product --> </div></div>');
                        });
                        owl.owlCarousel({
                            items: response.length,
                            autoplay: true, 
                            margin: 30,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                480: {
                                    items: 2
                                },
                                768: {
                                    items: 3
                                },
                                992: {
                                    items: 4
                                }
                            }
                        }); 
                    }else{
                        owl.empty();
                        owl.append('<p>No product</p>');

                    }
                },
                error: function( data ) {
                    console.log(data);
                }
            });
        });
    });
    
</script>
<!-- endinject -->
</body>
</html>