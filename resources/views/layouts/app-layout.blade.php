<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Home</title>

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <div class="col-md-3 col-sm-3 col-xs-7 v_middle">
                    <div class="logo">
                        <a href="#"><img src="{{asset('/')}}images/logo.png" alt="logo image"></a>
                    </div>
                </div><!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-md-8 col-md-offset-1 col-xs-5 col-sm-9 v_middle">
                    <!-- start .author-area -->
                    <div class="author-area"> 
                        <a href="{{ url('c2c/temp/customer') }}" class="author-area__seller-btn inline">Become a Seller</a>

                        <div class="author__notification_area">
                            <ul>
                                <li class="has_dropdown">
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-alarm"></span> <span class="notification_count noti">25</span>
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
                                                        <p><span>Anderson</span> added to Favourite <a href="#">Mccarther Coffee Shop</a></p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div><!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-heart loved noti_icon"></span>
                                                </div><!-- end /.notifications -->
                                            </div><!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head2.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p><span>Michael</span> commented on <a href="#">MartPlace Extension Bundle</a></p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div><!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-bubble commented noti_icon"></span>
                                                </div><!-- end /.notifications -->
                                            </div><!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head3.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p><span>Khamoka </span>purchased <a href="#">  Visibility Manager Subscriptions</a></p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div><!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-cart purchased noti_icon"></span>
                                                </div><!-- end /.notifications -->
                                            </div><!-- end /.notifications -->

                                            <div class="notification">
                                                <div class="notification__info">
                                                    <div class="info_avatar">
                                                        <img src="{{asset('/')}}images/notification_head4.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <p><span>Anderson</span> added to Favourite <a href="#">Mccarther Coffee Shop</a></p>
                                                        <p class="time">Just now</p>
                                                    </div>
                                                </div><!-- end /.notifications -->

                                                <div class="notification__icons ">
                                                    <span class="lnr lnr-star reviewed noti_icon"></span>
                                                </div><!-- end /.notifications -->
                                            </div><!-- end /.notifications -->
                                        </div><!-- end /.dropdown -->
                                    </div>
                                </li>

                                <li class="has_dropdown">
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-envelope"></span> <span class="notification_count msg">6</span>
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
                                                </div><!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>NukeThemes</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hello John Smith! Nunc placerat mi ...</p>
                                                    </div>
                                                </div><!-- end /.message_data -->
                                            </a><!-- end /.message -->

                                            <a href="message.html" class="message recent">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head5.png" alt="">
                                                    </div>
                                                </div><!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>Crazy Coder</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div><!-- end /.message_data -->
                                            </a><!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head6.png" alt="">
                                                    </div>
                                                </div><!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>Hybrid Insane</p>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div><!-- end /.message_data -->
                                            </a><!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head3.png" alt="">
                                                    </div>
                                                </div><!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>ThemeXylum</p>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                    </div>
                                                </div><!-- end /.message_data -->
                                            </a><!-- end /.message -->

                                            <a href="message.html" class="message">
                                                <div class="message__actions_avatar">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}images/notification_head4.png" alt="">
                                                    </div>
                                                </div><!-- end /.actions -->

                                                <div class="message_data">
                                                    <div class="name_time">
                                                        <div class="name">
                                                            <p>NukeThemes</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </div>

                                                        <span class="time">Just now</span>
                                                        <p>Hello John Smith! Nunc placerat mi ...</p>
                                                    </div>
                                                </div><!-- end /.message_data -->
                                            </a><!-- end /.message -->
                                        </div>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <div class="icon_wrap">
                                        <span class="lnr lnr-cart"></span> <span class="notification_count purch">2</span>
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
                                                        <div class="cat"><a href="#"><img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a></div>
                                                    </div>
                                                </div>

                                                <div class="product__action">
                                                    <a href="#"><span class="lnr lnr-trash"></span></a>
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
                                                        <div class="cat"><a href="#"><img src="{{asset('/')}}images/catword.png" alt="">Wordpress</a></div>
                                                    </div>
                                                </div>

                                                <div class="product__action">
                                                    <a href="#"><span class="lnr lnr-trash"></span></a>
                                                    <p>$60</p>
                                                </div>
                                            </div>
                                            <div class="total">
                                                <p><span>Total :</span>$80</p>
                                            </div>
                                            <div class="cart_action">
                                                <a class="go_cart" href="cart.html">View Cart</a>
                                                <a class="go_checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--start .author__notification_area -->

                        <!--start .author-author__info-->
                        <div class="author-author__info inline has_dropdown">
                            <div class="author__avatar">
                                <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">

                            </div>
                            <div class="autor__info">
                                <p class="name">
                                    Jhon Doe
                                </p>
                                <p class="ammount">$20.45</p>
                            </div>

                            <div class="dropdown dropdown--author">
                                <ul>
                                    <li><a href="author.html"><span class="lnr lnr-user"></span>Profile</a></li>
                                    <li><a href="dashboard.html"><span class="lnr lnr-home"></span> Dashboard</a></li>
                                    <li><a href="dashboard-setting.html"><span class="lnr lnr-cog"></span> Setting</a></li>
                                    <li><a href="cart.html"><span class="lnr lnr-cart"></span>Purchases</a></li>
                                    <li><a href="favourites.html"><span class="lnr lnr-heart"></span> Favourite</a></li>
                                    <li><a href="dashboard-add-credit.html"><span class="lnr lnr-dice"></span>Add Credits</a></li>
                                    <li><a href="dashboard-statement.html"><span class="lnr lnr-chart-bars"></span>Sale Statement</a></li>
                                    <li><a href="dashboard-upload.html"><span class="lnr lnr-upload"></span>Upload Item</a></li>
                                    <li><a href="dashboard-manage-item.html"><span class="lnr lnr-book"></span>Manage Item</a></li>
                                    <li><a href="dashboard-withdrawal.html"><span class="lnr lnr-briefcase"></span>Withdrawals</a></li>
                                    <li><a href="#"><span class="lnr lnr-exit"></span>Logout</a></li>
                                </ul>
                            </div>
                        </div><!--end /.author-author__info-->
                    </div><!-- end .author-area -->

                    <!-- author area restructured for mobile -->
                    <div class="mobile_content ">
                        <span class="lnr lnr-user menu_icon"></span>

                        <!-- offcanvas menu -->
                        <div class="offcanvas-menu closed">
                            <span class="lnr lnr-cross close_menu"></span>
                            <div class="author-author__info">
                                <div class="author__avatar v_middle">
                                    <img src="{{asset('/')}}images/usr_avatar.png" alt="user avatar">
                                </div>
                                <div class="autor__info v_middle">
                                    <p class="name">
                                        Jhon Doe
                                    </p>
                                    <p class="ammount">$20.45</p>
                                </div>
                            </div><!--end /.author-author__info-->

                            <div class="author__notification_area">
                                <ul>
                                    <li>
                                        <a href="notification.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-alarm"></span> <span class="notification_count noti">25</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="message.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-envelope"></span> <span class="notification_count msg">6</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="cart.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span> <span class="notification_count purch">2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><!--start .author__notification_area -->

                            <div class="dropdown dropdown--author">
                                <ul>
                                    <li><a href="author.html"><span class="lnr lnr-user"></span>Profile</a></li>
                                    <li><a href="dashboard.html"><span class="lnr lnr-home"></span> Dashboard</a></li>
                                    <li><a href="dashboard-setting.html"><span class="lnr lnr-cog"></span> Setting</a></li>
                                    <li><a href="cart.html"><span class="lnr lnr-cart"></span>Purchases</a></li>
                                    <li><a href="favourites.html"><span class="lnr lnr-heart"></span> Favourite</a></li>
                                    <li><a href="dashboard-add-credit.html"><span class="lnr lnr-dice"></span>Add Credits</a></li>
                                    <li><a href="dashboard-statement.html"><span class="lnr lnr-chart-bars"></span>Sale Statement</a></li>
                                    <li><a href="dashboard-upload.html"><span class="lnr lnr-upload"></span>Upload Item</a></li>
                                    <li><a href="dashboard-manage-item.html"><span class="lnr lnr-book"></span>Manage Item</a></li>
                                    <li><a href="dashboard-withdrawal.html"><span class="lnr lnr-briefcase"></span>Withdrawals</a></li>
                                    <li><a href="#"><span class="lnr lnr-exit"></span>Logout</a></li>
                                </ul>
                            </div>

                            <div class="text-center"><a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a></div>
                        </div>
                    </div><!-- end /.mobile_content -->
                </div><!-- end /.col-md-5 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </div><!-- end  -->

    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="lnr lnr-menu"></span>
                        </button>

                        <!-- start mainmenu__search -->
                        <div class="mainmenu__search hidden-sm hidden-md hidden-lg">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="Search product">
                                    <button type="submit" class="search-wrap__btn"><span class="lnr lnr-magnifier"></span></button>
                                </div>
                            </form>
                        </div><!-- start mainmenu__search -->
                    </div>

                    <nav class="navbar navbar-default mainmenu__menu">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="has_dropdown">
                                    <a href="index.html">HOME</a>
                                    <div class="dropdown dropdown--menu">
                                        <ul>
                                            <li><a href="index.html">Home Multi Vendor</a></li>
                                            <li><a href="index-single.html">Home Two Single User</a></li>
                                            <li><a href="index3.html">Home Three Product</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="all-products-list.html">all product</a>
                                    <div class="dropdown dropdown--menu">
                                        <ul>
                                            <li><a href="all-products.html">Recent Items</a></li>
                                            <li><a href="all-products.html">Popular Items</a></li>
                                            <li><a href="index3.html">Free Templates</a></li>
                                            <li><a href="#">Follow Feed</a></li>
                                            <li><a href="#">Top Authors</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="#">categories</a>
                                    <div class="dropdown dropdown--menu">
                                        <ul>
                                            <li><a href="category-grid.html">Popular Items</a></li>
                                            <li><a href="category-grid.html">Admin Templates</a></li>
                                            <li><a href="category-grid.html">Blog / Magazine / News</a></li>
                                            <li><a href="category-grid.html">Creative</a></li>
                                            <li><a href="category-grid.html">Corporate Business</a></li>
                                            <li><a href="category-grid.html">Resume Portfolio</a></li>
                                            <li><a href="category-grid.html">eCommerce</a></li>
                                            <li><a href="category-grid.html">Entertainment</a></li>
                                            <li><a href="category-grid.html">Landing Pages</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">Elements</a>
                                    <div class="dropdown_megamenu contained">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li><a href="accordion.html">Accordion</a></li>
                                                        <li><a href="alert.html">Alert</a></li>
                                                        <li><a href="brands.html">Brands</a></li>
                                                        <li><a href="buttons.html">Buttons</a></li>
                                                        <li><a href="cards.html">Cards</a></li>
                                                        <li><a href="charts.html">Charts</a></li>
                                                        <li><a href="content-block.html">Content Block</a></li>
                                                        <li><a href="dropdowns.html">Drpdowns</a></li>
                                                        <li><a href="features.html">Features</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li><a href="footer.html">Footer</a></li>
                                                        <li><a href="info-box.html">Info Box</a></li>
                                                        <li><a href="menu.html">Menu</a></li>
                                                        <li><a href="modal.html">Modal</a></li>
                                                        <li><a href="pagination.html">Pagination</a></li>
                                                        <li><a href="peoples.html">Peoples</a></li>
                                                        <li><a href="products.html">Products</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li><a href="progressbar.html">Progressbar</a></li>
                                                        <li><a href="social.html">Social</a></li>
                                                        <li><a href="tab.html">Tabs</a></li>
                                                        <li><a href="table.html">Table</a></li>
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                        <li><a href="timeline.html">Timeline</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">Pages</a>
                                    <div class="dropdown_megamenu">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">Product</li>
                                                        <li><a href="all-products.html">Products Grid</a></li>
                                                        <li><a href="all-products-list.html">Products List</a></li>
                                                        <li><a href="category-grid.html">Category Grid</a></li>
                                                        <li><a href="category-list.html">Category List</a></li>
                                                        <li><a href="search-product.html">Search Product</a></li>
                                                        <li><a href="single-product.html">Single Product V1</a></li>
                                                        <li><a href="single-product-v2.html">Single Product V2</a></li>
                                                        <li><a href="single-product-v3.html">Single Product V3</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">Author</li>
                                                        <li><a href="author.html">Author Profile</a></li>
                                                        <li><a href="author-items.html">Author Items</a></li>
                                                        <li><a href="author-reviews.html">Customer Reviews</a></li>
                                                        <li><a href="author-followers.html">Followers</a></li>
                                                        <li><a href="author-following.html">Following</a></li>
                                                        <li><a href="notification.html">Notifications</a></li>
                                                        <li><a href="message.html">Message Inbox</a></li>
                                                        <li><a href="message-compose.html">Message Compose</a></li>
                                                        <li><a href="favourites.html">Favorites Items</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">Dashboard</li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="dashboard-setting.html">Account Settings</a></li>
                                                        <li><a href="dashboard-purchase.html">Author Purchases</a></li>
                                                        <li><a href="dashboard-add-credit.html">Add Credits</a></li>
                                                        <li><a href="dashboard-statement.html">Statements</a></li>
                                                        <li><a href="invoice.html">Invoice</a></li>
                                                        <li><a href="dashboard-upload.html">Upload Item</a></li>
                                                        <li><a href="dashboard-manage-item.html">Edit Items</a></li>
                                                        <li><a href="dashboard-withdrawal.html">Withdrawals</a></li>
                                                        <li><a href="dashboard-manage-item.html">Manage Items</a></li>
                                                        <li><a href="add-payment-method.html">Add Payment Method</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">Customers</li>
                                                        <li><a href="support-forum.html">Support Forum</a></li>
                                                        <li><a href="support-forum-detail.html">Forum Details</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="signup.html">Register</a></li>
                                                        <li><a href="recover-pass.html">Recovery Password</a></li>
                                                        <li><a href="customer-dashboard.html">Customer Dashboard</a></li>
                                                        <li><a href="customer-downloads.html">Customer Downloads</a></li>
                                                        <li><a href="customer-info.html">Customer Info</a></li>
                                                    </ul>

                                                    <ul>
                                                        <li class="title">Blog</li>
                                                        <li><a href="blog1.html">Blog V-1</a></li>
                                                        <li><a href="blog2.html">Blog V-2</a></li>
                                                        <li><a href="single-blog.html">Single Blog</a></li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">Other</li>
                                                        <li><a href="how-it-works.html">How It Works</a></li>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                                        <li><a href="testimonial.html">Testimonials</a></li>
                                                        <li><a href="faq.html">FAQs</a></li>
                                                        <li><a href="affiliate.html">Affiliates</a></li>
                                                        <li><a href="term-condition.html">Terms &amp; Conditions</a></li>
                                                        <li><a href="event.html">Event</a></li>
                                                        <li><a href="event-detail.html">Event Detail</a></li>
                                                        <li><a href="404.html">404 Error page</a></li>
                                                        <li><a href="carieer.html">Job Posts</a></li>
                                                        <li><a href="job-detail.html">Job Details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <!-- start mainmenu__search -->
                        <div class="mainmenu__search hidden-xs">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="Search product here...">
                                    <button type="submit" class="search-wrap__btn"><span class="lnr lnr-magnifier"></span></button>
                                </div>
                            </form>
                        </div><!-- start mainmenu__search -->
                    </nav>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row-->
        </div><!-- start .container -->
    </div><!-- end /.mainmenu-->
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
    </div><!-- end /.footer-big -->

    <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2017 <a href="#">MartPlace</a>. All rights reserved. Created by <a href="#">AazzTech</a></p>
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
<script src="{{ asset('js/map.js') }}"></script>
<!-- endinject -->
</body>
</html>