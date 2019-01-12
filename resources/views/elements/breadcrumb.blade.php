<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb d-flex justify-content-center align-items-center">
    <li class="breadcrumb-items">
        <a href="#">
            <div data-lottie="{{asset('json/notification.json')}}" class="position-relative feed" style="width:60px;height:60px;">
            </div> 
        </a>
    </li>
    <li class="breadcrumb-items">
        <a href="#">
            <div data-lottie="{{asset('json/19-SendButton.json')}}" class="position-relative chat" style="width:60px;height:60px;">
            </div> 
        </a>
    </li>
  </ol>
</nav> -->
<div class="breadcrumb">
    <ul>
        <li><a href="{{isset($data['type']) && $data['type']=='shop'?route('shop'):route('market')}}">@lang('menu.home')</a></li>
        @if(isset($data['bread']))
            @foreach($data['bread'] as $bread)
                @foreach($bread->translations as $v)
                    @if($v->locale==app()->getLocale())
                        @php 
                            $route = route('market.dynamiccat',$v->slug);
                        @endphp 
                        @if(isset($data['type']) && $data['type']=='shop')
                            @php 
                                $route = route('shop.dynamiccat',$v->slug);
                            @endphp
                        @endif
                        <li class="{{$data['cnode']==$v->categories_ads_id?'active':''}}"><a href="{{$route}}">{{$v->name}}</a></li> 
                    @endif
                @endforeach
            @endforeach
        @endif
    </ul>
</div>