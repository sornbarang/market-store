@if(count($cats['product']) > 0) 
    @foreach($cats['product'] as $lpk => $getprops)
        @php 
            $avatar='';  
            if(null !== $getprops->user->profile){ 
                $media = $getprops->user->profile->getMedia(); 
                foreach($media as $val){   
                    if($getprops->user->profile->avatar == $val->id){
                        $avatar=$val->id.'/'.$val->file_name;  
                    }
                } 
            }
            $img='';
            $newsItem=App\Models\ProductsAds::find($getprops->products_ads_id); 
            $mediaItems = $newsItem->getMedia();
            $getFirstMedia = $newsItem->getFirstMedia();   
            if($getFirstMedia){
                $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
            }else{
                $img = asset('imgs/default/conversions/default.jpg');
            } 
        @endphp
        <div class="partner">
            <!-- start .single-product -->
            <div class="product product--card product--card-small">
                <div class="hot position-absolute text-white bg-danger p-1 font-weight-bold rounded-0" style="z-index:9;max-width:100px;">
                    HOT
                </div>
                <div class="product__thumbnail">
                    <img src="{{ $img }}" alt="Product Image">
                    <div class="prod_btn">
                        <a href="{{route('market.productdetail',$getprops->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                        {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                    </div>
                    <!-- end /.prod_btn -->
                </div>
                <!-- end /.product__thumbnail -->

                <div class="product-desc">
                    <a href="javascript:void(0)" class="product_title">
                        <h4 class="trucate" title="{{$getprops->name}}">{{$getprops->name}}</h4>
                    </a>
                    <ul class="titlebtm">
                        <li>
                            @if(isset($avatar) && !empty($avatar))
                                <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image"> 
                            @else
                                <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                            @endif 
                            <p>
                                <a href="#">{{$getprops->user->name}}</a>
                            </p>
                        </li>
                        <li class="out_of_class_name">
                            <div class="row no-gutters">
                                <div class="col col-md-4">
                                    <p>
                                        <span class="flag-icon flag-icon-kh"></span>
                                        <span>Cam</span>
                                    </p>
                                </div>
                                <div class="col col-md-8 text-right">
                                    <p> 
                                        <span>Phnom penh</span>
                                    </p>                                                                 
                                </div>
                            </div>
                        </li>
                        {{--
                        <li class="out_of_class_name">
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>27</span>
                                </p>
                            </div>
                            <div class="rating product--rating">
                                <ul>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-half-o"></span>
                                    </li>
                                </ul>
                            </div>
                        </li>--}}
                    </ul>

                </div>
                <!-- end /.product-desc -->
                <div class="product-purchase"> 
                    {{--
                    <div class="w-100 text-price pt-1 pb-1">
                        @if(null !==$getprops->discount && is_numeric($getprops->discount) && (int)$getprops->discount !=0)
                            <div class="row">
                                <div class="col-6 text-truncate text-left text-danger">
                                    {{round($getprops->discount, 2)}}% Off
                                </div>
                                <div class="col-6 text-truncate text-right"> 
                                    <span title="${{null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price}}">${{null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price}}</span> 
                                </div>
                            </div>
                        @else
                            &nbsp;
                        @endif
                    </div>--}}
                    <div class="row no-gutters d-flex content-justify-center align-items-center">
                        <div class="col-8 text-truncate">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    @if(null !==$getprops->discount && is_numeric($getprops->discount) && (int)$getprops->discount !=0)
                                        <div class="w-100 text-price text-center">
                                            <span title="${{$getprops->price??0}}"><del>${{str_limit($getprops->price??0,5)}}<del></span> 
                                        </div>
                                    @else
                                        <div class="w-100">
                                            &nbsp;
                                        </div>
                                    @endif
                                    <div class="w-100">
                                        <div class="price_love w-100 text-center">
                                            <span title="${{null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price}}">${{str_limit(null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price,5)}}</span> 
                                        </div>
                                    </div>
                                </div>
                                <div style="white-space:normal;" class="col-md-4 text-center align-self-center text-danger font-weight-bold">
                                    @if(null !==$getprops->discount && is_numeric($getprops->discount) && (int)$getprops->discount !=0)
                                        {{round($getprops->discount, 2)}} % Off
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                            </div> 
                        </div>
                        <div class="col-4 text-truncate"> 
                            <a href="javascript:void(0)">
                                <div class="rateproduct" data-rating="{{$getprops->averageRating}}">
                                    <input  type="hidden" name="score">
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
                <!-- end /.product-purchase -->
            </div>
            <!-- end /.single-product -->
        </div> 
    @endforeach 
@else
    <p>@lang('frontlabel.norecord')</p>
@endif 
{{--
    @if(count($cats['product']) > 5) 
        <div class="owl-nav">
            <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
        <div class="owl-dots">
            <div class="owl-dot active"><span></span></div>
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot"><span></span></div>
        </div>
    @endif
--}}