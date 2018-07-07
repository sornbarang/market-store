<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('market')}}">@lang('menu.home')</a></li>
                        @if(isset($data['bread']))
                            @foreach($data['bread'] as $bread)
                                @foreach($bread->translations as $v)
                                    @if($v->locale==app()->getLocale())
                                        <li class="{{$data['cnode']==$v->name?'active':''}}"><a href="{{route('market.dynamiccat',$v->categories_ads_id)}}">{{$v->name}}</a></li> 
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                    </ul>
                </div> 
                <h1 class="page-title">
                    @if (Route::has('login'))
                        @auth
                            {{ ucfirst(Auth::user()->name) }}'s
                        @endauth 
                    @endif
                {{NULL !== $data['breadcrub']?$data['breadcrub']:'Application'}}</h1>
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>