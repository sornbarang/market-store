<!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-wrapper mt-0">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('/')}}images/search.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        {{--<div class="search__title"><h3><span>35,270</span> website templates from our creative community</h3></div>--}}
                        <div class="search__field">
                            <form action="{{route('market.search')}}" method="get"> 
                                <div class="field-wrapper">
                                    <input value="{{request()->searchstr??''}}" name="searchstr" class="relative-field rounded" type="text" placeholder="@lang('frontlabel.searchpro')">
                                    <button class="btn btn--round" type="submit">@lang('frontlabel.search')</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="{{route('market')}}">@lang('menu.home')</a></li>
                                @if(isset($data['bread']))
                                    @foreach($data['bread'] as $bread)
                                        @foreach($bread->translations as $v)
                                            @if($v->locale==app()->getLocale()) 
                                                <li class="{{$data['cnode']==$v->categories_ads_id?'active':''}}"><a href="{{route('market.dynamiccat',$v->slug)}}">{{$v->name}}</a></li> 
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </div><!-- end /.search-area2 -->
</section>
<!--================================
    END SEARCH AREA
=================================-->