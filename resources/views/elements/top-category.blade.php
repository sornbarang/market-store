<div class="col-md-12">  
    <div class="d-flex justify-content-center flex-wrap">
        @if(isset($data['type']) && $data['type']=='shop')
            @php 
                $routeLink='shop.dynamiccat';
            @endphp 
        @else
            @php 
                $routeLink='market.dynamiccat';
            @endphp
        @endif
        @if(isset($data['root']) && !empty($data['root']))
            @foreach($data['root'] as $val) 
                <div>
                    <a href="{{route($routeLink,$val->slug)}}">
                        <div class="statement_info_card pr-0 pl-0 p-lg-4" >
                            <div class="info_wrap">
                                @php 
                                    if(isset($val->icon)){
                                        $padding = '';
                                        if(strpos($val->icon, 'fa-bolt') !== false){
                                            $padding='padding:20px 27px';
                                        }else if( strpos($val->icon, 'fa-ellipsis-h') ){
                                            $padding='padding:20px 24px';
                                        }
                                    }
                                @endphp 
                                
                                @if(isset($val->img))
                                <div data-toggle="tooltip" data-placement="bottom" title="{{ucfirst($val->slug)}}" class="icon greenbackground" style="padding: 16px 23px;">
                                    <img style="max-width: 25px;" src="{{$val->img}}"> 
                                </div>
                                @else
                                <span data-toggle="tooltip" data-placement="bottom" title="{{ucfirst($val->slug)}}" style="{{$padding}}" class="{{$val->icon}} icon greenbackground"></span>
                                @endif
                            </div> 
                        </div>
                    </a>
                </div> 
            @endforeach
        @endif
    </div>  
</div> 