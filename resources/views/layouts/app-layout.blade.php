<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/raty/2.8.0/jquery.raty.css">
    <!-- endinject -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
</head>
<body class="home3">
@php 
    $avatar='';
    $r='market.';
@endphp 
@if(isset($data['type']) && $data['type']=='shop')
    @php 
        $r='shop.';
    @endphp
@endif
<!--================================
        START MENU AREA
    =================================--> 
<div class="menu-area sticky-top">
    <!-- start .top-menu-area -->
    <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 col-md-3 col-6 v_middle">
                    <div class="logo">
                        @php 
                            $home = route('market');
                            if(isset($data['type']) && $data['type']=='shop'){
                                $home = route('shop');
                            }else{
                                if(isset($home_page))
                                    $home = route($home_page);
                            }
                        @endphp
                        <a href="{{ $home }}">
                            <img src="{{asset('/')}}images/logo.png" alt="logo" class="img-fluid">
                        </a> 
                    </div>
                </div>
                <!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle align-self-center">
                    <!-- start .author-area -->
                    <!-- d-flex justify-content-center align-items-center -->
                    <div class="author-area h-100 d-md-flex">  
                    <!--start .author__notification_area -->
                    @if (Route::has('login')) 
                        @auth
                            @php
                                $media = (Auth::user()->profile != null) ? Auth::user()->profile->getMedia() : [];
                                foreach($media as $val){
                                    if(Auth::user()->profile->avatar==$val->id){
                                        // dump($val);
                                        $avatar=$val->id.'/'.$val->file_name;
                                        // $avatar=$val->id.'/avatar.png';
                                    }
                                }
                            @endphp
                        @else
                        @endauth 
                    @endif 
                        
                    @if (Route::has('login'))
                        @auth 
                        {{-- <a class="btn btn--xs mr-3 align-self-center" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> 
                        @lang('authlabel.logout')
                        </a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <!--start .author-author__info-->
                        <div class="author-author__info inline has_dropdown"> 
                            @if (Route::has('login'))
                                <div class="author__avatar">
                                    @if(isset($avatar) && !empty($avatar))
                                        <img src="{{Storage::disk('dospace')->url($avatar)}}" alt="user avatar" style="border-radius:50%;max-width:50px;">
                                    @else
                                        <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">
                                    @endif
                                </div>
                                <div class="autor__info">
                                    <p class="name text-white">
                                        @if (Route::has('login'))
                                            @auth
                                                {{ ucfirst(Auth::user()->name) }}
                                            @else
                                                Guest
                                            @endauth
                                        @endif
                                    </p>
                                </div>
                                    @auth
                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <a href="{{route($r.'myprofile')}}">
                                                        <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('feeds')}}">
                                                        <span class="fa fa-rss"></span>@lang('profile.feed')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('chat.home')}}">
                                                        <span class="fa fa-comments-o"></span>@lang('profile.chat')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route($r.'mysetting')}}">
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
                                                    <a href="{{route($r.'myitemupload')}}">
                                                        <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route($r.'mymanageitem')}}">
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
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <span class="lnr lnr-exit"></span>@lang('profile.logout')
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    @endauth
                                @endif 
                        </div>
                        <!--end /.author-author__info-->
                        @else 
                            @if (null !== request()->route() && request()->route()->getName() != 'login')  
                                
                                <div class="row h-100">
                                    <form class="frmlogincustom needs-validation" method="POST" action="{{ route('login') }}"  novalidate>
                                    @csrf
                                        <div class="row"> 
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-6"> 
                                                        <label for="validationTooltipUsername" class="m-0 p-0 text-white">@lang('authlabel.email')</label>
                                                        <div class="input-group"> 
                                                                <input  style="height:40px;" id="user_name" type="text" class="rounded-right bg-white text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="Email Or Name" name="email" value="{{ old('email') }}" required autofocus>
                                                                
                                                                @if ($errors->has('email'))
                                                                    <span class="invalid-tooltip text-white w-100">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @else
                                                                    <div class="invalid-tooltip w-100">
                                                                        <strong> Please login a unique and valid username or email.</strong>
                                                                    </div> 
                                                                @endif
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="row d-flex flex-nowrap">
                                                            <div class="col-md-12">
                                                                <label for="validationTooltipUsername" class="m-0 p-0 text-white">@lang('authlabel.password')</label>
                                                                <div class="input-group"> 
                                                                    <input name="password" style="height:40px;" class="border-0 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" placeholder="@lang('authlabel.password')" aria-describedby="validationTooltipUsernamePrepend" required>
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text bg-white border-0 rounded-right" id="password">
                                                                        @if ($errors->has('password'))
                                                                             <i class="text-danger fa fa-lg fa-exclamation-circle" aria-hidden="true"></i>
                                                                        @else 
                                                                            &nbsp;
                                                                        @endif 
                                                                        </span>
                                                                    </div>
                                                                    <div class="invalid-tooltip text-white w-100">
                                                                        <strong> Please choose  valid @lang('authlabel.password').</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button  type="submit" class="align-self-end btn btn-primary btn-sm">@lang('authlabel.login')</button>
                                                        </div>
                                                        
                                                        {{--
                                                        <label for="exampleInputEmail1" class="m-0 p-0 text-white">@lang('authlabel.password')</label>
                                                        <div class="row d-flex flex-nowrap">
                                                            <div class="col-md-12">
                                                                <input placeholder="@lang('authlabel.password')" style="height:40px;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                            </div>
                                                            <button  type="submit" class="btn btn-primary btn-sm">@lang('authlabel.login')</button>
                                                        </div>
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback text-white">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @else 
                                                            <div class="invalid-feedback">
                                                                Please enter your password.
                                                            </div>
                                                        @endif
                                                        --}}
                                                        <div class="text-white">@lang('authlabel.lost') <small><a href="{{ route('password.request') }}"><a class="text-white" href="{{ route('password.request') }}">@lang('authlabel.password')</a> ? or <a href="{{ route('register') }}" class="text-white">@lang('authlabel.signup')</a></small></div> 
                                                    </div>  
                                                </div>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @endauth 
                    @endif
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
                                        <img src="{{Storage::disk('dospace')->url($avatar)}}" alt="user avatar" style="border-radius:50%;">
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
                                            <a href="{{route($r.'myprofile')}}">
                                                <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                            </li>
                                            <li>
                                                <a href="{{url('feeds')}}">
                                                    <span class="fa fa-rss"></span>@lang('profile.feed')</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chat.home')}}">
                                                    <span class="fa fa-comments-o"></span>@lang('profile.chat')</a>
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
                                                <a href="{{route($r.'myitemupload')}}">
                                                    <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                            </li>
                                            <li>
                                                <a href="{{route($r.'mymanageitem')}}">
                                                    <span class="lnr lnr-book"></span>@lang('profile.manageitems')</a>
                                            </li> 
                                            <li>
                                                @if (Route::has('login'))
                                                    @auth
                                                        @hasrole('super-admin|admin')
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
    {{--
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
    --}}
</div> 
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
                            
                            <p>{{env('TREE_WB_FOOTER','2020 TreeWB. All rights reserved. Created by TreeWB')}}</p>
                        </div>
                        
                        <div class="go_top">
                            <span class="lnr lnr-chevron-up"></span>
                        </div>
                        <div class="sticky-menu-right pl-1 pr-1" style="width:auto;">
                            @if(isset($data['type']) && $data['type']=='shop')
                                <a href="{{ route('market') }}">
                                    <span class="lnr lnr-pointer-right font-weight-bold"></span> Online Shop
                                </a>
                            @else 
                                <a href="{{ route('shop') }}" >
                                    <span class="lnr lnr-pointer-right font-weight-bold"></span> TreeWB Store
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <nav class="navbar navbar-expand-lg"> 
                            <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
                                <ul class="navbar-nav"> 
                                    <li class="nav-item">
                                        <a href="{{ route('termcondiction') }}" class="text-white">{{trans('menu.termcondiction')}}</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a href="{{ route('contact') }}" class="text-white">{{trans('menu.contact')}}</a>
                                    </li>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if ($localeCode != LaravelLocalization::getCurrentLocale())
                                            <li class="nav-item pl-2">
                                                <a class="text-white" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach 
                                </ul>
                            </div>
                        </nav> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.13.0/bodymovin.js" type="text/javascript"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/raty/2.8.0/jquery.raty.js"></script>
<script src='{{ asset('js/jquery.zoom.js') }}'></script>
<script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>
@yield('cusomescript')
<script> 
(function() {
'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) { 
                if($(this).find('#password').val()==''){
                    $(this).find('#password').next().find('span#password').html('<i class="text-danger fa fa-lg fa-exclamation-circle" aria-hidden="true"></i>');
                }
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();
var elm = $('.container .blog-explor-breadcrum .roket,.feed');
console.log(elm);
playLottie(elm);
function playLottie(elm){
        $(elm).each(function(e){
            var anim= lottie($(this).data('lottie'),$(this),'play'); 
                anim.setSpeed(1.5);
        })
}
function lottie(json,elm,option){ 
    var animation = bodymovin.loadAnimation({
        container: elm[0], // Required
        path:json, // Required
        renderer: 'svg/canvas/html', // Required
        loop: true, // Optional
        autoplay: true, // Optional,
        name: "Hello World", // Name for future reference. Optional.
    });
    return animation;
}
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
        var cpass=$('form#frmupdateprofile #password_confirmation').val();
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
                console.log(documentClick);
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
        function getProductByCategory(mythis){
            var this_=mythis
            xhr=$.ajax({
                url: this_.data('route'),
                type: 'GET', 
                datatype: "html",
                beforeSend: function()
                { 
                    var elm = this_.parents('.blog-explor-breadcrum').next().find('#lottie');
                        elm.show();
                    var anim= lottie('{{asset("json/zoom_when_loading_data.json")}}',elm,'play'); 
                        anim.setSpeed(1.5);
                },
                headers: {
                    'X-CSRF-Token':CSRF_TOKEN,
                }, 
                success: function( response ) {   
                    var elm = this_.parents('.blog-explor-breadcrum').next().find('#lottie');
                        elm.hide(),
                        anim=lottie('{{asset("json/zoom_when_loading_data.json")}}',elm,'destroy'); 
                        anim.destroy();
                       this_.parents('.blog-explor-breadcrum').next().find('#lottie').hide();
                    var owl=this_.parents('.blog-explor-breadcrum').next().children().find('.partners');
                        owl.empty();
                        owl.trigger('destroy.owl.carousel');
                        owl.html(response); 
                        $('div.rateproduct,div.rateproducthover').raty(
                            { 
                                starOff   :"{{asset('imgs/no.png')}}",
                                iconRange: [            
                                    { range: 1, on: "{{asset('imgs/0.png')}}"},
                                    { range: 2, on: "{{asset('imgs/1.png')}}"},
                                    { range: 3, on: "{{asset('imgs/2.png')}}"}
                                ],   
                                hints: ['unlike','normal','love'],
                                readOnly:true,
                                single:true,
                                number:3,
                                score: function() {
                                    if($(this).attr('data-rating') >=4){
                                        $num=3;
                                    }else if($(this).attr('data-rating') < 4 && $(this).attr('data-rating') >= 2 ){
                                        $num=2;
                                    }else if($(this).attr('data-rating') < 2 && $(this).attr('data-rating') >= 1 ){
                                        $num=1;
                                    }else{
                                        $num=2;
                                    }
                                    return $num;
                                }
                            }
                        );
                        owl.owlCarousel({
                            items: 5,
                            autoplay: true,
                            margin: 30,  
                            navText : ["",""],
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
                                },
                                
                                992: {
                                    items: 5
                                }
                            }
                        }); 
                },
                error: function( data ) {
                    console.log(data);
                }
            });
        }
        $( document ).on( ios_devices, "#getProductOfCategory", function(e){  
            $(this).parent().parent().find('li').first().children().attr('class','');
            $(this).parent().parent().find('li:not(:last-child)').children().attr('class','');
            $(this).attr('class','activecat'); 
            e.preventDefault(); 
            if (e.type == "click") documentClick = true; 
            if (documentClick){
                if(xhr==null){
                    getProductByCategory($(this));
                }else{
                    xhr.abort();
                    getProductByCategory($(this));
                }
            }
            
        });
        if($('.tree li.parent_li').hasClass('d-collape')){   
            $('.tree li.parent_li.d-collape ul > li').attr('style','display: list-item;');
        }
        // List explore category
        $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
        $(document).on('click','.tree li.parent_li > span', function (e) { 
            var rootP=$(this).parents('li.parent_li.d-collape');
            var children = $(this).parent('li.parent_li').find(' > ul > li');
            if(rootP.length){  
                rootP.removeClass('d-collape');
                children.hide('fast');
            }else{
                if (children.is(":visible")) {
                        children.hide('fast');
                    if(!$(this).hasClass( "parent_root" )){
                        $(this).attr('title', 'Expand this branch').find(' > i').removeClass('fa-minus-square').addClass('fa-plus-square');
                    } 
                } else {
                    children.show('fast');
                    if(!$(this).hasClass( "parent_root" )){
                        $(this).attr('title', 'Collapse this branch').find(' > i').removeClass('fa-plus-square').addClass('fa-minus-square');
                    }
                }
            }
            e.stopPropagation();
        });
        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('.owl-prev').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.owl-next').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })
    }); 
</script>
<!-- endinject -->
</body>
</html>