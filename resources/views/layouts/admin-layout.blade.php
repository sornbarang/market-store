<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>MaterialWrap - jQuery full version</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/vendor.bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/app.bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/theme-a.css">
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
                <ul class="nav navbar-nav left-menu hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="nav-link">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-lg app_menu_launcher hidden-xs">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <span>Dropdown</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-left btn-primary p-15 text-center">
                            <li>
                                <ul>
                                    <li><a href="app-mail.html"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="app-notes.html"><i class="mdi mdi-lightbulb"></i><span>Notes</span></a></li>
                                    <li><a href="app-taskboard.html"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown mega">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link" aria-expanded="false">
                            <span>Mega</span>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu full-width p-l-10">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-4">
                                    <h3>Pages <span class="badge status info">10</span></h3>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="page-profile.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i> Profile</a>
                                                </li>
                                                <li>
                                                    <a href="page-invoice.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Invoice</a>
                                                </li>
                                                <li>
                                                    <a href="page-timeline.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="page-locations.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Locations</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="page-pricing-tables.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Pricing Tables</a>
                                                </li>
                                                <li>
                                                    <a href="page-gallery.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="login.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Login</a>
                                                </li>
                                                <li>
                                                    <a href="lock-screen.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Lock Screen</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h3 class="p-t-15 p-b-15">New Arrivals</h3>
                                        <div class="col-xs-12">
                                            <div id="new_arrivals_megamenu" class="row">
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/39_Ie8T.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/39_8wMD.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/39_JnFC.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/2830_S4ql.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/4107_PPxC.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                                <div><img src="{{asset('/')}}assets/img/ecom/products/5764_YK7g.jpeg" class="col-sm-6 col-md-4 max-h-200" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h3 class="p-t-15 p-b-15">Today's Analysis</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="ct-chart ct-golden-section " id="chartist_megaMenu"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <option option="ES">Español</option>
                            <option option="FN"> Français</option>
                            <option option="IT">Italiano</option>
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
                    <li class="nav-dropdown">
                        <a href="#"><i class="zmdi zmdi-view-quilt"></i>Page Layouts</a>
                        <ul class="nav-sub">
                            <li class="nav-dropdown">
                                <a href="#">Full Width Layouts </a>
                                <ul class="nav-sub">
                                    <li><a href="layout-fullwidth-v1.html">Full Width v1</a></li>
                                    <li><a href="layout-fullwidth-v2.html">Full Width v2</a></li>
                                    <li><a href="layout-fullwidth-v3.html">Full Width v3</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#">Boxed Layouts</a>
                                <ul class="nav-sub">
                                    <li><a href="layout-boxed-v1.html">Boxed Layout v1</a></li>
                                    <li><a href="layout-boxed-v2.html">Boxed Layout v2</a></li>
                                    <li><a href="layout-boxed-v3.html">Boxed Layout v3</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#">Left Side Nav</a>
                                <ul class="nav-sub">
                                    <li><a href="layout-left-sidenav-v1.html">Left Side Nav v1</a></li>
                                    <li><a href="layout-left-sidenav-v2.html">Left Side Nav v2</a></li>

                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#">Right Side Nav</a>
                                <ul class="nav-sub">
                                    <li><a href="layout-right-sidenav-v1.html">Right Side Nav v1</a></li>
                                    <li><a href="layout-right-sidenav-v2.html">Right Side Nav v2</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-widgets"></i>Cards</a>
                        <ul class="nav-sub">
                            <li><a href="card-templates.html">Card Templates</a></li>
                            <li><a href="card-demos.html">Card Demos</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-chart"></i>Charts</a>
                        <ul class="nav-sub">
                            <li><a href="charts-c3.html">C3 Charts</a></li>
                            <li><a href="charts-chartist.html">Chartist</a></li>
                            <li><a href="charts-chartjs.html">Chartjs</a></li>
                            <li><a href="charts-morrisjs.html">Morris.js Charts</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">APP VIEWS</li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-shopping-cart"></i>E-Commerce</a>
                        <ul class="nav-sub">
                            <li><a href="ecommerce-dashboard.html">Dashboard</a></li>
                            <li><a href="ecommerce-products.html">Products</a></li>

                            <li><a href="ecommerce-customers.html">Customers</a></li>
                            <li><a href="ecommerce-settings.html">Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="app-file-manager.html"><i class="zmdi zmdi-folder"></i>File Manager</a></li>
                    <li><a href="app-taskboard.html"><i class="zmdi zmdi-view-column"></i>Taskboard</a></li>
                    <li><a href="app-notes.html"><i class="mdi mdi-lightbulb"></i>Notes</a></li>
                    <li><a href="app-mail.html"><i class="zmdi zmdi-email"></i>Mail</a></li>
                    <li class="sidebar-header">PAGE VIEWS</li>
                    <li><a href="page-profile.html"><i class="zmdi zmdi-account"></i>Profile</a></li>
                    <li><a href="page-invoice.html"><i class="zmdi zmdi-money"></i>Invoice</a></li>
                    <li><a href="page-timeline.html"><i class="zmdi zmdi-time"></i>Timeline</a></li>
                    <li><a href="page-locations.html"><i class="zmdi zmdi-pin"></i>Locations</a></li>
                    <li><a href="page-pricing-tables.html"><i class="zmdi zmdi-view-column"></i>Pricing Tables</a></li>
                    <li><a href="page-gallery.html"><i class="zmdi zmdi-collection-image"></i>Gallery</a></li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-lock"></i>Authentication</a>
                        <ul class="nav-sub">
                            <li><a href="login.html">Login &amp; Register</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">DESIGN ELEMENTS</li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-palette"></i>User Interface</a>
                        <ul class="nav-sub">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-animations.html">Animations</a></li>
                            <li><a href="ui-avatars.html">Avatars</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-colors.html">Colors</a></li>
                            <li><a href="ui-grid.html">Grid System</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-list.html">List</a></li>
                            <li><a href="ui-preloaders.html">Preloaders</a></li>
                            <li><a href="ui-badges-labels.html">Badges &amp; Labels</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-ungroup"></i>Components</a>
                        <ul class="nav-sub">
                            <li><a href="component-notifications-dialogs.html">Notifications &amp; Dialogs</a></li>
                            <li><a href="component-toolbars.html">Toolbars</a></li>
                            <li><a href="component-collapsible.html">Collapsible</a></li>
                            <li><a href="component-chips.html">Chips</a></li>
                            <li><a href="component-drawers.html">Drawers</a></li>
                            <li><a href="component-dropdowns.html">Dropdowns</a></li>
                            <li><a href="component-modals.html">Modals</a></li>
                            <li><a href="component-progressbars-sliders.html">Sliders &amp; Progressbars</a></li>
                            <li><a href="component-scrollable.html">Scrollable</a></li>
                            <li><a href="component-tabs.html">Tabs &amp; Pills</a></li>
                            <li><a href="component-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-subtitles"></i>Forms</a>
                        <ul class="nav-sub">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-layouts.html">Form Layouts</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-headline"></i>Tables</a>
                        <ul class="nav-sub">
                            <li><a href="tables.html">Basic Tables</a></li>
                            <li><a href="tables-datatables.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" data-trigger="sidebar-overlay-open"><i class="zmdi zmdi-invert-colors"></i>Theme Settings</a></li>
                    <li class="sidebar-header">EXTRAS</li>
                    <li><a href="index.html"><i class="zmdi zmdi-view-web"></i>Front-end</a><span class="label label-info pull-right font-size-11">Coming soon</span></li>
                    <li class="nav-dropdown">
                        <a href="#" title="Menu Levels">
                            <i class="zmdi zmdi-folder"></i>Menu Levels</a>
                        <ul class="nav-sub">
                            <li>
                                <a href="javascript:;" title="Level 2.1">
                                    <i class="fa fa-fw fa-file"></i> Level 1.1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="Level 2.2">
                                    <i class="fa fa-fw fa-file"></i> Level 1.2
                                </a>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#" title="Level 2.3">
                                    <i class="fa fa-fw fa-folder-open"></i> Level 1.3
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="javascript:;" title="Level 3.1">
                                            <i class="fa fa-fw fa-file"></i> Level 2.1
                                        </a>
                                    </li>
                                    <li class="nav-dropdown">
                                        <a href="#" title="Level 3.2">
                                            <i class="fa fa-fw fa-folder-open"></i> Level 2.2
                                        </a>
                                        <ul class="nav-sub">
                                            <li>
                                                <a href="javascript:;" title="Level 4.1">
                                                    <i class="fa fa-fw fa-file"></i> Level 3.1
                                                </a>
                                            </li>
                                            <li class="nav-dropdown">
                                                <a href="#" title="Level 4.2">
                                                    <i class="fa fa-fw fa-folder-open"></i> Level 3.2
                                                </a>
                                                <ul class="nav-sub">
                                                    <li class="nav-dropdown">
                                                        <a href="#" title="Level 5.1">
                                                            <i class="fa fa-fw fa-folder-open"></i> Level 4.1
                                                        </a>
                                                        <ul class="nav-sub">
                                                            <li>
                                                                <a href="javascript:;" title="Level 6.1">
                                                                    <i class="fa fa-fw fa-file"></i> Level 5.1
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" title="Level 6.2">
                                                                    <i class="fa fa-fw fa-file"></i> Level 5.2
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="Level 5.2">
                                                            <i class="fa fa-fw fa-file"></i> Level 4.2
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="Level 5.3">
                                                            <i class="fa fa-fw fa-file"></i> Level 4.3
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="helper-classes.html"><i class="zmdi zmdi-info"></i>Helper Classes</a></li>
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
                    <li class="active" role="presentation"><a href="#dashboard1" data-toggle="tab">Dashboard v1</a></li>
                    <li role="presentation"><a href="#dashboard2" data-toggle="tab">Dashboard v2</a></li>
                </ul>
            </div>
            <div id="content" class="container-fluid">
                <div class="content-body">
                    <div id="dashboard_content" class="tab-content">
                        <div class="tab-pane fade active in" id="dashboard1">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="card-stack-wrapper" id="chartistPathAnimationDashboard">
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q1 Orders</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-gray"><i class="zmdi zmdi-caret-down"></i> 0.05%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-PathAnimation1" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q2 Orders</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-red"><i class="zmdi zmdi-caret-down"></i> 3%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-PathAnimation2" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q3 Orders</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-green"><i class="zmdi zmdi-caret-up"></i> 23%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-PathAnimation3" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q4 Orders</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-green"><i class="zmdi zmdi-caret-up"></i> 0.25%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-PathAnimation4" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="card-stack-wrapper" id="chartistLineDashboard">
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q1 Subscriptions</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-green">16% <i class="zmdi zmdi-trending-up"></i></small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-LineChart1" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q2 Subscriptions</h2>
                                                    <ul class="card-actions icons right-top">
                                                        <li><small class="text-red">0.5% <i class="zmdi zmdi-trending-down"></i></small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-LineChart2" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Monthly Subscriptions</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-green">34% <i class="zmdi zmdi-trending-up"></i></small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-LineChart3" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Monthly Subscriptions</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-gray">0.5% <i class="zmdi zmdi-trending-up"></i></small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-LineChart4" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="card-stack-wrapper" id="chartistBarsDashboard">
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Projected Sales</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-gray"><i class="zmdi zmdi-caret-down"></i> 3%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-BarChart1" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q1 Sales</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-green"><i class="zmdi zmdi-caret-up"></i> 14%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-BarChart2" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q2 Sales</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-red"><i class="zmdi zmdi-caret-down"></i> 0.04%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-BarChart3" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card p-b-30">
                                                <header class="card-heading p-15">
                                                    <h2 class="card-title">Q3 Sales</h2>
                                                    <ul class="card-actions icons  right-top">
                                                        <li><small class="text-gray"><i class="zmdi zmdi-caret-up"></i> 0.3%</small></li>
                                                    </ul>
                                                </header>
                                                <div class="card-body h-125">
                                                    <ul>
                                                        <li>
                                                            <div id="ct-BarChart4" class="chartist-wrapper">
                                                                <div class="ct-chart"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <header class="card-heading">
                                            <h2 class="card-title">Website Stats</h2>
                                            <small>Phasellus condimentum ipsum id auctor</small>
                                            <ul class="card-actions icons  right-top">
                                                <li>
                                                    <a href="javascript:void(0)" onClick="MaterialWrap.dashboardWebStats()" data-toggle="refresh">
                                                        <i class="zmdi zmdi-refresh-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0)" data-toggle="dropdown">
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
                                            </ul>
                                        </header>
                                        <div class="card-body p-15">
                                            <div id="website-stats" style="position: relative;height: 320px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card type--profile">
                                        <header class="card-heading card-background" id="card_img_01">
                                            <img src="{{asset('/')}}assets/img/profiles/large_02.jpg" alt="" class="img-circle ">
                                            <ul class="card-actions icons  right-top">
                                                <li class="dropdown">
                                                    <a href="javascript:void(0)" data-toggle="dropdown">
                                                        <i class="zmdi zmdi-more-vert text-white"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right btn-primary">
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
                                            </ul>
                                        </header>
                                        <div class="card-body">
                                            <h3 class="name">Allison Grayce</h3>
                                            <span class="title">UI/UX Designer</span>
                                            <button type="button" class="btn btn-primary btn-round">Connect</button>
                                        </div>
                                        <footer class="card-footer border-top">
                                            <div class="row row p-t-10 p-b-10">
                                                <div class="col-xs-4"><span class="count">250</span><span>Post</span></div>
                                                <div class="col-xs-4"><span class="count">1.5m</span><span>Followers</span></div>
                                                <div class="col-xs-4"><span class="count">627</span><span>Following</span></div>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <header class="card-heading p-15">
                                            <h2 class="card-title">Card Wall for Sprint 34</h2>
                                            <small>Sprint 34</small>
                                            <ul class="card-actions icons right-top">
                                                <li class="dropdown">
                                                    <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="zmdi zmdi-sort"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right btn-primary">
                                                        <li>
                                                            <a href="javascript:void(0)"><span class="badge-status default"></span> Backlog</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><span class="badge-status warning"></span> On Hold</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><span class="badge-status primary"></span>In Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><span class="badge-status danger"></span> Needs Reviewed</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><span class="badge-status success"></span> Complete</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="card-body card-default p-0">
                                            <ul class="scrum-group">
                                                <!-- Scrum Item -->
                                                <li class="scrum-item back-log">
                                                    <header class="scrum-header">
                                                        <h5 class="scrum-title">Add to cart animation</h5>
                                                        <small></small>
                                                        <ul class="pull-right m-r-10">
                                                            <li>
                                                                <span class="label label-primary">In Progress</span>
                                                            </li>
                                                        </ul>
                                                    </header>
                                                    <div class="scrum-body p-t-5 p-b-10">
                                                        <img src="{{asset('/')}}assets/img/profiles/01.jpg" alt="" class="img-circle" />
                                                        <img src="{{asset('/')}}assets/img/profiles/03.jpg" alt="" class="img-circle" />
                                                        <img src="{{asset('/')}}assets/img/profiles/08.jpg" alt="" class="img-circle" />
                                                    </div>
                                                    <div class="scrum-footer p-15">
                                                        <div class="progress primary">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                                <span>60%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Scrum Item -->
                                                <!-- Scrum Item -->
                                                <li class="scrum-item on-hold">
                                                    <header class="scrum-header">
                                                        <h5 class="scrum-title">Product page A/B test</h5>
                                                        <small></small>
                                                        <ul class="pull-right m-r-10">
                                                            <li>
                                                                <span class="label label-warning">On Hold</span>
                                                            </li>
                                                        </ul>
                                                    </header>
                                                    <div class="scrum-body p-t-5 p-b-10">
                                                        <img src="{{asset('/')}}assets/img/profiles/02.jpg" alt="" class="img-circle" />
                                                        <img src="{{asset('/')}}assets/img/profiles/06.jpg" alt="" class="img-circle" />
                                                    </div>
                                                    <div class="scrum-footer p-15">
                                                        <div class="progress warning">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                                                <span>30%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Scrum Item -->
                                                <!-- Scrum Item -->
                                                <li class="scrum-item complete">
                                                    <header class="scrum-header">
                                                        <h5 class="scrum-title">Refactor web components</h5>
                                                        <small></small>
                                                        <ul class="pull-right m-r-10">
                                                            <li>
                                                                <span class="label label-success">Completed</span>
                                                            </li>
                                                        </ul>
                                                    </header>
                                                    <div class="scrum-body p-t-5 p-b-10">
                                                        <img src="{{asset('/')}}assets/img/profiles/07.jpg" alt="" class="img-circle" />
                                                        <img src="{{asset('/')}}assets/img/profiles/05.jpg" alt="" class="img-circle" />
                                                        <img src="{{asset('/')}}assets/img/profiles/15.jpg" alt="" class="img-circle" />
                                                    </div>
                                                    <div class="scrum-footer p-15">
                                                        <div class="progress success">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                                <span>100%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Scrum Item -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card reveal drawer off-canvas-wrapper card-mail">
                                        <header class="card-heading app_primary_bg mail-heading p-b-20">
                                            <ul class="card-actions icons  left-top">
                                                <a href="javascript:void(0)" role="button" class="text-white" data-card-off-canvas="is-active">
                                                    <i class="zmdi zmdi-menu"></i>
                                                </a>
                                            </ul>
                                            <h2 class="card-title p-l-30 text-white">Inbox</h2>
                                            <ul class="card-actions icons right-top">
                                                <li>
                                                    <a href="javascript:void(0)" class="text-white" data-toggle="refresh">
                                                        <i class="zmdi zmdi-refresh-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="card-body p-0 max-h-500 scrollbar overflow-auto">
                                            <ul class="list-group p-0">
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/02.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">John Smith</div>
                                                        <div class="list-group-item-text">[Dribbble] Work inquiry from John Smith.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/03.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Mike Jones </div>
                                                        <div class="list-group-item-text">We would also require your assistance to design our backend application.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Allison Grayce</div>
                                                        <div class="list-group-item-text">If you don't break a few things you're not trying hard enough.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/18.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Ashley Ford</div>
                                                        <div class="list-group-item-text">Let's touch base this Friday and go over the project requirements.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/16.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Josh Hemsley</div>
                                                        <div class="list-group-item-text">Tree-shaking example with Typescript and Webpack</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/06.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Nikki Clark </div>
                                                        <div class="list-group-item-text">I'm thrilled to announce that Designing for Performance is now available for free online.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Johanna Kollmann </div>
                                                        <div class="list-group-item-text">Leaving for London in one week</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card card-off-canvas">
                                            <header class="card-heading alt-heading">
                                                <div class="profile">
                                                    <h4 class="card-title">MW</h4></div>
                                                <a href="javascript:void(0)" class="info"><span>username@materialwrap.com</span></a>
                                            </header>
                                            <div class="card-body p-0">
                                                <nav class="submenu">
                                                    <ul>
                                                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-inbox"></i> Inbox</a></li>
                                                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-mail-send"></i> Sent</a></li>
                                                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-archive"></i> Archived</a></li>
                                                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-delete"></i> Trash</a></li>
                                                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Settings</a></li>
                                                    </ul>
                                                    <nav>
                                                    </nav>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="card card-reveal p-0">
                                            <header class="card-heading border-bottom">
                                                <ul class="card-actions icons left-top">
                                                    <li>
                                                        <a href="javascript:void(0)" data-toggle="reveal">
                                                            <i class="zmdi zmdi-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="card-actions icons right-top">
                                                    <li>
                                                        <div class="icon-upload">
                                                            <label for="file-input">
                                                                <i class="zmdi zmdi-attachment"></i>
                                                            </label>
                                                            <input id="file-input" type="file">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="blue-text" data-toggle="reveal">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </header>
                                            <div class="card-body p-0">
                                                <form class="form-horizontal email-form">
                                                    <div class="form-group">
                                                        <input type="text" value="" placeholder="To" class="form-control" id="email-to" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" placeholder="Subject" class="form-control" id="email-subject" //>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control message" placeholder="Compose email" rows="5" id="email-message" /></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <ul class="more">
                                                <li>
                                                    <a href="javascript:void(0)">View More</a>
                                                </li>
                                            </ul>
                                            <ul class="card-actions icons right">
                                                <li>
                                                    <button class="btn btn-primary btn-fab" data-toggle="reveal"><i class="zmdi zmdi-edit"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dashboard2">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="card card-nav-tabs">
                                        <header class="card-heading heading-primary">
                                            <div class="nav-tabs-navigation">
                                                <div class="nav-tabs-wrapper">
                                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                                        <li class="active">
                                                            <a href="#cardnav5" role="tab" data-toggle="tab">
                                                                <i class="zmdi zmdi-home"></i> Home
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#cardnav6" role="tab" data-toggle="tab">
                                                                <i class="zmdi zmdi-calendar-note"></i> About
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#cardnav7" role="tab" data-toggle="tab">
                                                                <i class="zmdi zmdi-view-list-alt"></i> Tasks
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#cardnav8" role="tab" data-toggle="tab">
                                                                <i class="zmdi zmdi-settings"></i> Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fadeIn active" id="cardnav5">
                                                    <p>Helvetica letterpress bicycle rights banh mi keffiyeh af. Food truck shabby chic actually mixtape twee. Pabst blog messenger bag, four loko vape post-ironic paleo freegan. Twee raw denim brooklyn cornhole, polaroid cardigan 8-bit cred pinterest
                                                        biodiesel. Seitan woke vinyl, hoodie fingerstache irony bicycle rights vape sustainable DIY skateboard. Quinoa tumeric venmo, af lyft fashion axe slow-carb.</p>
                                                </div>
                                                <div class="tab-pane fadeIn" id="cardnav6">
                                                    <p>Schlitz enamel pin neutra succulents bespoke, dreamcatcher tattooed flannel man bun la croix YOLO readymade chicharrones poke. Selfies ramps brooklyn microdosing church-key sustainable, keytar next level chicharrones PBR&amp;B. Mlkshk schlitz
                                                        whatever, twee wolf godard banh mi try-hard meh bitters irony. Cronut williamsburg shabby chic, typewriter vape skateboard post-ironic lo-fi YOLO shoreditch iceland.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fadeIn" id="cardnav7">
                                                    <p>Mlkshk tilde church-key literally jean shorts heirloom. Venmo scenester air plant narwhal ennui, ethical fashion axe small batch raclette bicycle rights asymmetrical 3 wolf moon art party listicle. Street art lo-fi snackwave, cliche chartreuse
                                                        pug drinking vinegar hashtag pok pok asymmetrical la croix. Tilde distillery meditation waistcoat vaporware, selfies mumblecore schlitz brunch try-hard gluten-free.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fadeIn" id="cardnav8">
                                                    <p>Poutine tumblr wayfarers salvia. Quinoa twee raclette VHS. Enamel pin cornhole kale chips freegan meggings poutine kinfolk swag. Yuccie tumeric pok pok taxidermy affogato food truck. Enamel pin affogato next level occupy cliche, PBR&amp;B
                                                        +1 edison bulb master cleanse. Williamsburg edison bulb bitters, venmo vexillologist tattooed keffiyeh ennui four dollar toast tofu. Yr microdosing biodiesel meggings.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="card image-over-card">
                                                <div class="card-image">
                                                    <a href="javascript:vodi(0)">
                                                        <img src="{{asset('/')}}assets/img/gallery/full/full-11.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">Raven Warwick</h4>
                                                    <h6 class="category text-gray text-center">UI/UX Designer</h6>
                                                    <div class="card-footer text-center">
                                                        <button class="btn btn-twitter btn-fab btn-fab-sm m-l-5 m-r-5"><i class="zmdi zmdi-twitter"></i></button>
                                                        <button class="btn btn-facebook btn-fab btn-fab-sm m-l-5 m-r-5"><i class="zmdi zmdi-facebook"></i></button>
                                                        <button class="btn btn-dribbble btn-fab btn-fab-sm m-l-5 m-r-5"><i class="zmdi zmdi-dribbble"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="card image-over-card">
                                                <div class="card-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('/')}}assets/img/gallery/full/full-13.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">Focus on your growing business</h4>
                                                    <h6 class="category text-gray">10 min read</h6>
                                                    <div class="card-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card type--scheduler ">
                                        <header class="card-heading">
                                            <div class="curr-date">
                                                <h3 class="curr-dd text-white"></h3>
                                                <h5 class="curr-mmmm-dd text-white"></h5>
                                            </div>
                                            <ul class="card-actions icons  alt-actions right-top">
                                                <li>
                                                    <a href="javascript:void(0)" data-toggle="refresh">
                                                        <i class="zmdi zmdi-refresh-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="card-actions icons fab-action right-bottom m-b-n-30">
                                                <li>
                                                    <button type="button" class="btn btn-primary btn-fab" data-toggle="modal" data-target="#schedule_modal"><i class="zmdi zmdi-plus"></i></button>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="card-body clear-both p-0 max-h-500 scrollbar">
                                            <div class="week-container">
                                                <ul class="week top">
                                                    <li class="day day-names"><span>sun</span></li>
                                                    <li class="day day-names"><span>mon</span></li>
                                                    <li class="day day-names"><span>tue</span></li>
                                                    <li class="day day-names"><span>wed</span></li>
                                                    <li class="day day-names"><span>thu</span></li>
                                                    <li class="day day-names"><span>fri</span></li>
                                                    <li class="day day-names"><span>sat</span></li>
                                                </ul>
                                                <ul class="week bottom">
                                                    <li class="day"><span>7</span></li>
                                                    <li class="day"><span>8</span></li>
                                                    <li class="day current point"><span>9</span></li>
                                                    <li class="day"><span>10</span></li>
                                                    <li class="day"><span>11</span></li>
                                                    <li class="day point"><span>12</span></li>
                                                    <li class="day"><span>13</span></li>
                                                </ul>
                                            </div>
                                            <ul class="list-group p-0">
                                                <li class="list-group-item border-top p-t-20 p-b-20">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/01.jpg" alt="" class="img-circle max-w-50 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Design meeting with Melissa</div>
                                                        <div class="list-group-item-text">8:00 - 10:30am</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-top p-t-20 p-b-20">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/04.jpg" alt="" class="img-circle max-w-50 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Review mockups with Janet </div>
                                                        <div class="list-group-item-text">10:15 - 11:30am Hangouts</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-top p-t-20 p-b-20">
                                                    <span class="pull-left"><img src="{{asset('/')}}assets/img/profiles/18.jpg" alt="" class="img-circle max-w-50 m-r-10"></span>
                                                    <div class="list-group-item-body">
                                                        <div class="list-group-item-heading">Catch up with Michael</div>
                                                        <div class="list-group-item-text">8:30pm Lost Forty Brewing</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ENDS $dashboard_content -->
                </div>
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
                                <h5>San Francisco, CA</h5>
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
                    <div class="card card-task transparent m-t-30">
                        <header class="card-heading">
                            <h5>My Task</h5>
                            <ul class="card-actions icons  right-top">
                                <li>
                                    <a href="javascript:void(0)" class="animate_plus_x" data-toggle="input"><i class="zmdi zmdi-plus"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="collapse"><i class="zmdi zmdi-chevron-down"></i> </a>
                                </li>
                            </ul>
                        </header>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Add task" class="form-control" />
                                </div>
                            </form>
                            <ul class="checklist">
                                <li><span class="checkbox">
													<label>
														<input type="checkbox" value="">
														<i class="input-helper"></i> add gulp script to project
													</label>
												</span>
                                </li>
                                <li><span class="checkbox">
												<label>
													<input type="checkbox" value="">
													<i class="input-helper"></i> update style guide
												</label>
											</span>
                                </li>
                                <li><span class="checkbox">
											<label>
												<input type="checkbox" value="">
												<i class="input-helper"></i> send over prototype to client
											</label>
										</span>
                                </li>
                                <li><span class="checkbox">
										<label>
											<input type="checkbox" value="">
											<i class="input-helper"></i> complete Landing page
										</label>
									</span>
                                </li>
                                <li>
									<span class="checkbox">
										<label >
											<input type="checkbox" value="">
											<i class="input-helper"></i> complete SASS helper functions
										</label>
									</span>
                                </li>
                                <li><span class="checkbox">
									<label >
										<input type="checkbox" value="">
										<i class="input-helper"></i> update icon sheet with @3x
									</label>
								</span>
                                </li>
                                <li><span class="checkbox">
								<label >
									<input type="checkbox" value="">
									<i class="input-helper"></i> convert logo from png to svg
								</label>
							</span>
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
                        <p class="copy">&copy; Copyright <time class="year"></time> MaterialWrap - All Rights Reserved</p>
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
</body>

</html>
