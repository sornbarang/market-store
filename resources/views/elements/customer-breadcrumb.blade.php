<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('market')}}">@lang('menu.home')</a></li>
                        {{--<li><a href="dashboard.html">@lang('profile.dashboard')</a></li>
                        <li class="active"><a href="#">@lang('profile.setting')</a></li>--}}
                    </ul>
                </div> 
                <h1 class="page-title">
                    @if (Route::has('login'))
                        @auth
                            {{ ucfirst(Auth::user()->name) }}'s
                        @else
                            guest
                        @endauth 
                    @endif
                {{NULL !== $data['breadcrub']?$data['breadcrub']:'Application'}}</h1>
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>