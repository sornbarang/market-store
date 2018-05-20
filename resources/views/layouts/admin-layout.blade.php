<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>MaterialWrap - jQuery full version</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/vendor.bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/app.bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/theme-a.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/admin-back.css">
</head>
<body>
<div id="app_wrapper">
    <header id="app_topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <div class="nav-wrapper">
                <ul class="nav navbar-nav pull-left left-menu">
                    <li class="app_menu-open">
                        <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown avatar-menu">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="meta">
									<span class="avatar">
										<img src="{{asset('/')}}assets/img/profiles/02.jpg" alt="" class="img-circle max-w-35">
										<i class="badge mini success status"></i>
									</span>
									<span class="name">Mike Jones</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <ul class="dropdown-menu btn-primary dropdown-menu-right">
                            <li>
                                <a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
                            </li>
                            <li>
                                <a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="select-menu hidden-xs hidden-sm">
                        <select class="select form-control country" style="display:none">
                            <option option="EN">English</option>
                            <option option="KH">Khmer</option>
                        </select>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-navsearch-open>
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs hidden-sm">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                            <span class="badge mini status danger"></span>
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                            <li class="dropdown-menu-header">
                                <ul class="card-actions icons  left-top">
                                    <li class="withoutripple">
                                        <a href="javascript:void(0)" class="withoutripple">
                                            <i class="zmdi zmdi-settings"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h5>NOTIFICATIONS</h5>
                                <ul class="card-actions icons right-top">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Dakota Johnson</div>
                                                    <div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Todd Cook</div>
                                                    <div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item ">
                                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                <div class="list-group-item-body">
                                                    <div class="list-group-item-heading">Jennifer Ross</div>
                                                    <div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a href="javascript:void(0)">
                                    All notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="javascript:void(0)" data-toggle-state="sidebar-overlay-open" data-key="rightSideBar">
                            <i class="mdi mdi-playlist-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="search" action="" class="navbar-form" id="navbar_form">
                <div class="form-group">
                    <input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
                    <i data-navsearch-close class="zmdi zmdi-close close-search"></i>
                </div>
                <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
        </nav>
    </header>
    <aside id="app_sidebar-left">
        <div id="logo_wrapper">
            <ul>
                <li class="logo-icon">
                    <a href="index.html">
                        <div class="logo">
                            <img src="{{asset('/')}}assets/img/logo/logo-icon.png" alt="Logo">
                        </div>
                        <h1 class="brand-text">MaterialWrap</h1>
                    </a>
                </li>
                <li class="menu-icon">
                    <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
                        <i class="mdi mdi-backburger"></i>
                    </a>
                </li>
            </ul>
        </div>
        <nav id="app_main-menu-wrapper" class="scrollbar">
            <div class="sidebar-inner sidebar-push">
                <ul class="nav nav-pills nav-stacked">
                    <li class="sidebar-header">NAVIGATION</li>
                    <li class="active"><a href="index.html"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>

                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-chart"></i>Setting</a>
                        <ul class="nav-sub">
                            <li><a href="#">Language</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">Market</li>
                    <li class="nav-dropdown {{isset($data['active'])?'active open':''}}"><a href="#"><i class="zmdi zmdi-shopping-cart"></i>E-Commerce</a>
                        <ul class="nav-sub">
                            <li><a href="#">Dashboard</a></li>
                            <li class="{{isset($data['active']) && $data['active']=='product'?'active':''}}"><a href="{{url('admin/product')}}" >Products</a></li>

                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">Market Advertise</li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-widgets"></i>Country</a>
                        <ul class="nav-sub">
                            <li><a href="#">List</a></li>
                            <li><a href="#">Add</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-widgets"></i>Category</a>
                        <ul class="nav-sub">
                            <li><a href="#">List</a></li>
                            <li><a href="#">Add</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-palette"></i>User</a>
                        <ul class="nav-sub">
                            <li><a href="#">Role</a></li>
                            <li><a href="#">Permission</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-palette"></i>Advertise</a>
                        <ul class="nav-sub">
                            <li><a href="#">User</a></li>
                            <li><a href="{{url('admin/ads')}}">Banner</a></li>
                            <li><a href="#">Report</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-palette"></i>Report</a>
                        <ul class="nav-sub">
                            <li><a href="#">List</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>
    <section id="content_outer_wrapper" class="">
        <div id="content_wrapper" class="rightnav_v2">
            <div id="header_wrapper" class="header-sm">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <header id="header">
                                <h1>Dashboards</h1>
                            </header>
                        </div>
                    </div>
                </div>
                <ul class="card-actions icons lg alt-actions right-top">
                    <li>
                        <a href="javascript:void(0)" class="drawer-trigger" data-drawer="toggle-right">
                            <i class="zmdi zmdi-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tabpanel tab-header">
                <ul class="nav nav-tabs p-l-20">
                    <li class="active" role="presentation"><a href="#dashboard1" data-toggle="tab">Dashboard Store</a></li>
                    <li role="presentation"><a href="#dashboard2" data-toggle="tab">Dashboard Market Advertise</a></li>
                </ul>
            </div>
            <div id="content" class="container-fluid">
                @yield('content')
            </div>
            <!-- ENDS $content -->
            <aside id="rightnav">
                <div class="rightnav-content-wrapper scrollbar">
                    <div class="card date transparent">
                        <div class="card-body">
                            <div class="curr-date">
                                <h4 class="curr-dd"></h4>
                                <h5 class="curr-mmmm-dd"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card type--weather transparent">
                        <div class="card-body">
                            <header class="curr-weather">
                                <h5>Cambodia, PP</h5>
                                <i class="wi wi-day-cloudy"></i>
                                <div class="curr-temp-wrapper">
                                    <span class="curr-temp">72</span>
                                    <sup class="curr-sup">°</sup>
                                    <span class="curr-f">F</span>
                                </div>
                                <h6>Clear with periodic clouds</h6>
                            </header>
                            <ul class="forcast">
                                <li>
                                    <div class="curr-temp-wrapper">
                                        <span class="forcast-day forcast-one"></span>
                                        <i class="wi wi-day-rain-mix"></i>
                                        <span class="curr-temp">65</span>
                                        <sup class="curr-sup">°</sup>
                                        <span class="curr-f">F</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="curr-temp-wrapper">
                                        <span class="forcast-day forcast-two"></span>
                                        <i class="wi wi-day-cloudy-gusts"></i>
                                        <span class="curr-temp">70</span>
                                        <sup class="curr-sup">°</sup>
                                        <span class="curr-f">F</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="curr-temp-wrapper">
                                        <span class="forcast-day forcast-three"></span>
                                        <i class="wi wi-day-lightning"></i>
                                        <span class="curr-temp">73</span>
                                        <sup class="curr-sup">°</sup>
                                        <span class="curr-f">F</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
        <footer id="footer_wrapper">
            <div class="footer-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h6>Want to Work with Us?</h6>
                        <p>Paleo flexitarian bushwick letterpress, ea migas yr adipisicing. Man bun tacos tumblr kombucha, yuccie banjo affogato dolore gentrify retro chartreuse. Anim austin tempor ethical, sapiente food truck fanny pack farm-to-table. Culpa keytar esse
                            tilde hoodie, art party nostrud messenger bag authentic helvetica kinfolk cred eu affogato forage.</p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="javascript:void(0)">About Us </a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h6>Email Newsletters</h6>
                        <p>Sign up for new MaterialWrap content, updates, and offers.</p>
                        <div class="form-group is-empty">
                            <div class="input-group">
                                <label class="control-label sr-only" for="footerEmail">Email Address</label>
                                <input type="email" class="form-control" id="footerEmail" placeholder="Enter your email address...">
                                <span class="input-group-btn">
								<button type="button" class="btn btn-white btn-fab animate-fab btn-fab-sm">
									<i class="zmdi zmdi-mail-send"></i>
								</button>
							</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copy-wrapper">
                    <div class="col-xs-8">
                        <p class="copy">&copy; Copyright <time class="year"></time> TreeWB - All Rights Reserved</p>
                    </div>
                    <div class="col-xs-4">
                        <ul class="social">
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <aside id="app_sidebar-right">
        <div class="sidebar-inner sidebar-overlay">
            <div class="tabpanel">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active" role="presentation"><a href="#sidebar_chat" data-toggle="tab" aria-expanded="true">Chat</a></li>
                    <li role="presentation"><a href="#sidebar_activity" data-toggle="tab">Activity</a></li>
                    <li role="presentation"><a href="#sidebar_settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="sidebar_chat">
                        <form class="m-l-15 m-r-15 m-t-30">
                            <div class="input-group search-target">
                                <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                                <div class="form-group is-empty">
                                    <input type="text" value="" placeholder="Filter contacts..." class="form-control" data-search-trigger="open">
                                </div>
                            </div>
                        </form>
                        <ul class="description">
                            <li class="title">
                                Online
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="John Smith">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">John Smith</div>
                                    <div class="list-group-item-text">New York, NY</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Allison Grayce</div>
                                    <div class="list-group-item-text">Seattle, WA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/18.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Ashley Ford</div>
                                    <div class="list-group-item-text">Denver, CO</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini success status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Johanna Kollmann </div>
                                    <div class="list-group-item-text">Palo Alto, Ca</div>
                                </div>
                            </li>
                        </ul>
                        <ul class="description">
                            <li class="title">
                                Busy
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="Mike Jones">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/03.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Mike Jones </div>
                                    <div class="list-group-item-text">San Francisco, CA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Nikki Clark">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/06.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Nikki Clark </div>
                                    <div class="list-group-item-text">Sarasota, FL</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="Jason Kendall">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/15.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini warning status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Jason Kendall </div>
                                    <div class="list-group-item-text">New York, NY</div>
                                </div>
                            </li>
                        </ul>
                        <ul class="description">
                            <li class="title">
                                Offline
                            </li>
                        </ul>
                        <ul class="list-group p-0">
                            <li class="list-group-item" data-chat="open" data-chat-name="Josh Hemsley">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/16.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini danger status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">Josh Hemsley</div>
                                    <div class="list-group-item-text">Salem, MA</div>
                                </div>
                            </li>
                            <li class="list-group-item" data-chat="open" data-chat-name="James Hart">
                                <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/09.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                <i class="badge mini danger status"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading">James Hart</div>
                                    <div class="list-group-item-text">Salem, MA</div>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-fab btn-fab-sm animate-fab" data-chat="open" id="chat_fab_new">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="tab-pane fade" id="sidebar_activity">
                        <div class="sidebar-timeline">
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">15 minutes ago</small>
                                    <p><a href="#" class="accent">Mike Jones</a> fixed z-index conflict sidebar.scss</p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Hazel	Dean</a> left a comment on product page designs.</p>
                                    <p><em>"Yuccie shoreditch trust fund, artisan tumblr sustainable cronut unicorn blog seitan. "</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">45 minutes ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Molly</a> requested time off for training.</p>
                                    <p><em>"Snackwave church-key cardigan you probably haven't heard of them, asymmetrical microdosing cronut "</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Frederick	Roy</a> commented your post.</p>
                                    <p><em>"Skateboard dreamcatcher la croix, edison bulb sustainable sriracha vexillologist kombucha master cleanse."</em></p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Holly Cobb</a> Uploaded 6 new photos.</p>
                                </div>
                            </div>
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p><a href="javascript:void(0)" class="accent">Neal Stephens</a> setup a meeting with<a href="#" class="text-success"> Jason Kendall</a>.</p>
                                    <p><em>"Authentic aesthetic tattooed, PBR&B squid tote bag schlitz vaporware glossier yr man braid direct trade disrupt poke.  "</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sidebar_settings">
                        <div class="color-container">
                            <h3 class="title">Preset Color Options</h3>
                            <div class="row">
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-a.css">
                                            <input type="radio" name="setting-theme" checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-a"></span>
											<span class="color bg-shade-theme-a"></span>
										</span>
                                            <span class="color bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-b.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-b"></span>
											<span class="color bg-shade-theme-b"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-c.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-c"></span>
											<span class="color bg-shade-theme-c"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-d.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-d"></span>
											<span class="color bg-shade-theme-d"></span>
										</span>
                                            <span class="color  bg-menu-darkBlue"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-e.css">
                                            <input type="radio" name="setting-theme" checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-e"></span>
											<span class="color bg-shade-theme-e"></span>
										</span>
                                            <span class="color bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-f.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-f"></span>
											<span class="color bg-shade-theme-f"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-g.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-g"></span>
											<span class="color bg-shade-theme-g"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div class="color-option-check">
                                        <label data-load-css="assets/css/theme-h.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
											<span class="color bg-primary-theme-h"></span>
											<span class="color bg-shade-theme-h"></span>
										</span>
                                            <span class="color  bg-menu-white"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title m-t-30">Layout Mode</h3>
                            <ul class="description">
                                <li>
                                    <div class="radio block"><label><input type="radio" name="layoutMode" value="" checked>FULL WIDTH</label></div>
                                </li>
                                <li>
                                    <div class="radio block"><label><input type="radio" name="layoutMode" value="boxed-layout">BOXED</label></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <section id="chat_compose_wrapper">
        <div class="tippy-top">
            <div class="recipient">Allison Grayce</div>
            <ul class="card-actions icons right-top">
                <li>
                    <a href="javascript:void(0)">
                        <i class="zmdi zmdi-videocam"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu btn-primary dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)">Option One</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Option Two</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Option Three</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" data-chat="close">
                        <i class="zmdi zmdi-close"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="chat-wrapper scrollbar">
            <div class="chat-message ">
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Hey Mike, we have funding for our new project!</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper ">
                        <div class="chat-message-content">
                            <p>Awesome! Photo booth banh mi pitchfork kickstarter whatever, prism godard ethical 90"s cray selvage.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>


                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}assets/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}assets/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-recipient">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}/img/profiles/05.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message-sender">
                    <img class="chat-image chat-image-default" src="{{asset('/')}}/img/profiles/02.jpg" />
                    <div class="chat-message-wrapper">
                        <div class="chat-message-content">
                            <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                        </div>
                        <div class="chat-details">
                            <span class="today small"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer id="compose-footer">
            <form class="form-horizontal compose-form">
                <ul class="card-actions icons left-bottom">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-attachment-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-mood"></i>
                        </a>
                    </li>
                </ul>
                <div class="form-group m-10 p-l-75 is-empty">
                    <div class="input-group">
                        <label class="sr-only">Leave a comment...</label>
                        <input type="text" class="form-control form-rounded input-lightGray" placeholder="Leave a comment..">
                        <span class="input-group-btn">
						<button type="button" class="btn btn-blue btn-fab  btn-fab-sm">
							<i class="zmdi zmdi-mail-send"></i>
						</button>
					</span>
                    </div>
                </div>
            </form>
        </footer>
    </section>
</div>
<div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="schedule_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel-2">Title goes here</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci mi, in pharetra ligula. Nulla facilisi. Nulla
                    facilisi. Mauris convallis venenatis massa, quis consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies bibendum.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Ok</button>
            </div>
        </div>
        <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<script src="{{asset('/')}}assets/js/vendor.bundle.js"></script>
<script src="{{asset('/')}}assets/js/app.bundle.js"></script>
<script>
$(document).ready(function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    // Add New record
    $(document).on('click', 'form#addProduct button[type=submit]', function(e) {
        $('#addProduct #sumernotehidden').val($('#addProduct .note-editable').html()); 
        // e.preventDefault();
        $(this).submit();
    });
    // Edit record
    $(document).on('click', 'form#editProduct button[type=submit]', function(e) {
        $('#editProduct #sumernotehidden').val($('#editProduct .note-editable').html()); 
        // e.preventDefault();
        $(this).submit();
    });
    $(document).on('click', '.edit-product', function(e) {
        var id=$(this).data('id');
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-Token':CSRF_TOKEN,
            },
            url: "{{url('admin/product')}}/"+id+"/edit",
            data: $(this).data('id'),
            dataType:'json',
            success: function(response){
                // clear image to empty before set new attribute
                $('#image_upload_preview,#image_upload_preview1,#image_upload_preview2,#image_upload_preview3').attr('src','');
                // display css none
                $('#image_upload_preview,#image_upload_preview1,#image_upload_preview2,#image_upload_preview3').css('display','none');
                
                if(response.data !=''){
                    var imgs = response.data.image !=''?response.data.image.split(','):[]
                    console.log(imgs);
                    for(var i=0;i<imgs.length;i++){  
                        var img = imgs[i].replace('public/','');
                        var url ="{{Storage::url('')}}"+img; 
                        if(i==0){
                            $('#editProduct #file').val('me');
                            $('#editProduct #image_upload_preview').css('display','block');
                            $('#editProduct #image_upload_preview').attr('src',url)
                        }else{
                            $('#editProduct #image_upload_preview'+i).css('display','block');
                            $('#editProduct #image_upload_preview'+i).attr('src',url)
                        }
                        
                    }  
                    $('#editProduct').attr('action','{{url("admin/product")}}/'+response.data.id);
                    if(response.data.name !='' || response.data.price !=''){
                        $('#editProduct input[name="name"]').parent().attr('class','form-group label-floating is-empty is-focused')
                        $('#editProduct input[name="name"]').val(response.data.name)
                        $('#editProduct input[name="price"]').parent().attr('class','form-group label-floating is-empty is-focused')
                        $('#editProduct input[name="price"]').val(response.data.price);
                    }
                    $('#editProduct .note-editable.panel-body').empty();
                    $('#editProduct .note-editable.panel-body').html(response.data.description);
                    
                }
                
            }
        });
    });
    $('.note-editable').on("blur", function(){
        var markupStr = $('#summernote').summernote('code');

        // console.log($(this).html());
        // var markupStr = $('.add_product_desc').eq(2).summernote('code');
        console.log(markupStr);
        });
    // $('.note-editable.panel-body').keypress( _.debounce( function(){
        
    //     console.log($(this).html());
    //     var markupStr = $('.add_product_desc').eq(2).summernote('code');
    //     console.log(markupStr);
    // }, 500 ) );

    $('#inlineCheckbox1').click(function(){
        if($(this).is(':checked')){
            $(this).val(1)
        }else{
            $(this).val(0)
        }
    });
    $('#image_upload_preview,#image_upload_preview1,#image_upload_preview2,#image_upload_preview3').css('display','none');
    function readURL(input) {
        // console.log(input.parentElement.parentElement.childNodes[0].nextSibling);
        if (input.files && input.files[0]) {
            // show preview image
            input.parentElement.parentElement.childNodes[0].nextSibling.style.display = "block"
            // show remove image label
            input.parentElement.parentElement.childNodes[0].parentElement.children[1].style.display = "block"
            // console.log(input.parentElement.parentElement.childNodes[0]);
            // console.log(input.parentElement.parentElement.childNodes[0].parentElement.children[1]);
            // $('#image_upload_preview,#image_upload_preview1,#image_upload_preview2,#image_upload_preview3').css('display','block');
            var reader = new FileReader();

            reader.onload = function (e) {
                input.parentElement.parentElement.childNodes[0].nextSibling.setAttribute("src", e.target.result);
                // $('#image_upload_preview,#image_upload_preview1,#image_upload_preview2,#image_upload_preview3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file,#file1,#file2,#file3").change(function () {
        readURL(this);
    });
    

    // $('#submitbtn').click(function(e){
    //     var formData = new FormData($(this)[0]);
    //     $.ajax({
    //         type: "POST",
    //         headers: {
    //             'X-CSRF-Token':CSRF_TOKEN,
    //         },
    //         url: "{{url('admin/product')}}",
    //         data: formData,
    //         cache: false,
    //         success: function(data){
    //             console.log(data);
    //         }
    //     }); 

    // });
});
</script>
</body>

</html>
