<div class="row">  
    @if(isset($data['product']) && count($data['product']) > 0) 
        @foreach($data['product'] as $val)  
            @php
                $avatar='';
                $media = $val->user->profile->getMedia(); 
                foreach($media as $m){   
                    if($val->user->profile->avatar == $m->id){
                        $avatar=$m->id.'/'.$m->file_name;  
                    }
                } 
                $img='';  
                $getFirstMedia='';
                $mediaItems = $val->getMedia(); 
                if(count($mediaItems) > 0){
                    $getFirstMedia = $val->getFirstMedia();
                }else{
                    try {
                        $newsItem=App\Models\ProductsAds::findOrFail($val->products_ads_id); 
                        $mediaItems = $newsItem->getMedia(); 
                        $getFirstMedia = $newsItem->getFirstMedia(); 
                    } catch (Exception $e) {
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
                    } 
                } 
                if($getFirstMedia){
                    $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                }
            @endphp
            <div class="col-md-4 col-sm-6">
                <!-- start .single-product -->
                <div class="product product--card product--card-small">
                    <div class="product__thumbnail">
                        <img src="{{$img}}" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">@lang('frontlabel.moreinfo')</a>
                            {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                        </div><!-- end /.prod_btn -->
                    </div><!-- end /.product__thumbnail -->
                    <div class="product-desc">
                        <a href="#" class="product_title"><h4 title="{{$val->name}}">{{str_limit($val->name,35)}}</h4></a>
                        <ul class="titlebtm">
                            <li>
                                @if(isset($avatar) && !empty($avatar))
                                    <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image">
                                @else
                                    <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                @endif 
                                <p><a href="#">{{str_limit($val->user->name,15)}}</a></p>
                            </li> 
                            <li class="out_of_class_name">
                                <div class="row no-gutters">
                                    <div class="col col-md-5">
                                        <p>
                                            <span class="flag-icon flag-icon-kh"></span>
                                            <span>Cam</span>
                                        </p>
                                    </div>
                                    <div class="col col-md-7">
                                        <p> 
                                            <span>Phnom penh</span>
                                        </p>                                                                 
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div><!-- end /.product-desc -->

                    <div class="product-purchase">
                        <div class="price_love">
                            <span title="${{$val->price??''}}">${{str_limit($val->price,10)??''}}</span>
                        </div>
                        <a href="javascript:void(0)">
                            <div class="rateproduct cproduct" data-rating="{{$val->averageRating}}">
                                <input  type="hidden" name="score">
                            </div>
                        </a>
                    </div>
                </div><!-- end /.single-product -->
            </div><!-- end /.col-md-4 -->
        @endforeach
    @else
        @lang('frontlabel.norecord') {{$data['cnodeName'] ?? ''}}
    @endif
</div> 
@if(count($data['product']) > 0)
    <div class="row">
        <div class="col-md-12">
            <div class="pagination-area categorised_item_pagination">
            
                <nav class="navigation pagination" role="navigation">
                    <div class="nav-links"> 
                        {{$data['product']->links()}} 
                    </div>
                </nav>
            </div>
        </div>
    </div><!-- end /.row -->
@endif