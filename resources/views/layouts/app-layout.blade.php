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
    @else
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endif 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
</head>
<body class="home3">

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
                                    Logout
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
                                            @foreach (config('translatable.locales') as $lang => $language)
                                                @if ($lang != app()->getLocale())  
                                                    <li><a href="{{ route('lang.switch', $lang) }}">
                                                    @if( $lang=='km')
                                                        <span class="flag-icon flag-icon-kh"></span>
                                                    @else
                                                        <span class="flag-icon flag-icon-gb"></span>
                                                    @endif{{ $language }}</a>
                                                    </li>
                                                @endif
                                            @endforeach  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <div class="author__notification_area">
                            <ul>
                                {{--<li class="has_dropdown">
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-alarm"></span>
                                        <span class="notification_count noti">25</span>
                                    </div>

                                    <div class="dropdown notification--dropdown">

                                        <div class="dropdown_module_header">
                                            <h4>My Notifications</h4>
                                            <a href="notification.html">View All</a>
                                        </div>

                                        <div class="notifications_module">
                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            <span>Anderson</span> added to Favourite
                                                            <a href="#">Mccarther Coffee Shop</a>
                                                        </p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-heart loved noti_icon"></span>
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head2.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            <span>Michael</span> commented on
                                                            <a href="#">MartPlace Extension Bundle</a>
                                                        </p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-bubble commented noti_icon"></span>
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head3.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            <span>Khamoka </span>purchased
                                                            <a href="#"> Visibility Manager Subscriptions</a>
                                                        </p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-cart purchased noti_icon"></span>
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head4.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            <span>Anderson</span> added to Favourite
                                                            <a href="#">Mccarther Coffee Shop</a>
                                                        </p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-star reviewed noti_icon"></span>
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.notifications -->
                                        </div>
                                        <!-- end /.dropdown -->
                                    </div>
                                </li>--}}

                                {{--<li class="has_dropdown">
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-envelope"></span>
                                        <span class="notification_count msg">6</span>
                                    </div>

                                    <div class="dropdown messaging--dropdown">
                                        <div class="dropdown_module_header">
                                            <h4>My Messages</h4>
                                            <a href="message.html">View All</a>
                                        </div>

                                        <div class="messages">
                                            <a href="message.html" class="message recent">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head4.png" alt="">
                                                    </div>
                                                </div>
                                                <!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>NukeThemes</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hello John Smith! Nunc placerat mi ...</p>
                                                    </div>
                                                </div>
                                                <!-- end /.message_data -->
                                            </a>
                                            <!-- end /.message -->

                                            <a href="message.html" class="message recent">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head5.png" alt="">
                                                    </div>
                                                </div>
                                                <!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>Crazy Coder</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div>
                                                <!-- end /.message_data -->
                                            </a>
                                            <!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head6.png" alt="">
                                                    </div>
                                                </div>
                                                <!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>Hybrid Insane</p>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div>
                                                <!-- end /.message_data -->
                                            </a>
                                            <!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head3.png" alt="">
                                                    </div>
                                                </div>
                                                <!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>ThemeXylum</p>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div>
                                                <!-- end /.message_data -->
                                            </a>
                                            <!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head4.png" alt="">
                                                    </div>
                                                </div>
                                                <!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>NukeThemes</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hello John Smith! Nunc placerat mi ...</p>
                                                    </div>
                                                </div>
                                                <!-- end /.message_data -->
                                            </a>
                                            <!-- end /.message -->
                                        </div>
                                    </div>
                                </li>--}}
                                <li class="has_dropdown">
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
                                </li>
                            </ul>
                        </div>
                        <!--start .author__notification_area -->

                        <!--start .author-author__info-->
                        <div class="author-author__info inline has_dropdown">
                            <div class="author__avatar">
                                <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">

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
                                                    <a href="{{url(app()->getLocale().'/market/temp/myprofile')}}">
                                                        <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/customer')}}">
                                                        <span class="lnr lnr-home"></span> @lang('profile.dashboard')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/mysetting')}}">
                                                        <span class="lnr lnr-cog"></span> @lang('profile.setting')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/mycart')}}">
                                                        <span class="lnr lnr-cart"></span>@lang('profile.purchase')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/myfavorite')}}">
                                                        <span class="lnr lnr-heart"></span> @lang('profile.favourite')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/mysale')}}">
                                                        <span class="lnr lnr-chart-bars"></span>@lang('profile.salemanage')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/myitemupload')}}">
                                                        <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                                </li>
                                                <li>
                                                    <a href="{{url(app()->getLocale().'/market/temp/mymanageitem')}}">
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
                            
                        </div>
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
                                @foreach (config('translatable.locales') as $lang => $language)
                                    @if ($lang != app()->getLocale())  
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}">
                                                @if( $lang=='km')
                                                    <span class="flag-icon flag-icon-kh" style="float: left; top: 8px;margin-right: 5px;"></span>
                                                @else
                                                    <span class="flag-icon flag-icon-kh" style="float: left; top: 8px;margin-right: 5px;"></span>
                                                @endif
                                                    {{ $language }}
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
                                    <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">
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
                                
                                    <p class="ammount">$20.45</p>
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

                                    <li>
                                        <a href="cart.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span>
                                                <span class="notification_count purch">2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->
                            @if (Route::has('login'))
                                    @auth
                                    <div class="dropdown dropdown--author">
                                        <ul>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/myprofile')}}">
                                                    <span class="lnr lnr-user"></span>@lang('profile.profile')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/customer')}}">
                                                    <span class="lnr lnr-home"></span> @lang('profile.dashboard')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/mysetting')}}">
                                                    <span class="lnr lnr-cog"></span> @lang('profile.setting')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/mycart')}}">
                                                    <span class="lnr lnr-cart"></span>@lang('profile.puchase')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/myfavorite')}}">
                                                    <span class="lnr lnr-heart"></span> @lang('profile.favourite')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/mysale')}}">
                                                    <span class="lnr lnr-chart-bars"></span>@lang('profile.salemanage')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/myitemupload')}}">
                                                    <span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'/market/temp/mymanageitem')}}">
                                                    <span class="lnr lnr-book"></span>@lang('profile.manangeitems')</a>
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
                                    <a href="index.html">@lang('menu.home')</a>
                                    <div class="dropdown dropdown--menu">
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
                                    </div>
                                </li>
                                <li>
                                    <a href="#">{{trans('menu.policy')}}</a>
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
                        <img src="{{asset('/')}}images/flogo.png" alt="footer logo">
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
                    <h4 class="footer-widget-title text--white">Our Company</h4>
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
                    <h4 class="footer-widget-title text--white">Help and FAQs</h4>
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
                    <h4 class="footer-widget-title text--white">Newsletter</h4>
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
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBeySPFGz7DIUTrReCRQT6HYaMM0ia0knA"></script>
<script src="{{ asset('js/map.js') }}"></script>
<!-- endinject -->
</body>
</html>