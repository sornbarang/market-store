<div class="dashboard_menu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="dashboard_menu">
                    <li class="{{NULL !==strtolower($data['breadcrub']) && $data['breadcrub']=='dashboard'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/customer')}}"><span class="lnr lnr-home"></span>@lang('profile.dashboard')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='setting'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/mysetting')}}"><span class="lnr lnr-cog"></span>@lang('profile.setting')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='purchase'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/mycart')}}"><span class="lnr lnr-cart"></span>@lang('profile.purchase')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='favourite'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/myfavorite')}}"><span class="lnr lnr-heart"></span>@lang('profile.favourite')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='sale manangement'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/mysale')}}"><span class="lnr lnr-chart-bars"></span>@lang('profile.salemanage')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='upload item'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/myitemupload')}}"><span class="lnr lnr-upload"></span>@lang('profile.uploaditems')</a></li>
                    <li class="{{NULL !==strtolower($data['breadcrub']) && strtolower($data['breadcrub'])=='manage items'?'active':''}}"><a href="{{url(app()->getLocale().'/market/temp/mymanageitem')}}"><span class="lnr lnr-briefcase"></span>@lang('profile.manageitems')</a></li>
                </ul><!-- end /.dashboard_menu -->
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</div><!-- end /.dashboard_menu_area --> 