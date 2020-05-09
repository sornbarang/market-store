@if(count($cats['product']) > 0) 
    @foreach($cats['product'] as $lpk => $getprops)
        @php 
            $avatar='';
            $location='N/A';  
            if(isset($getprops->user->profile)){ 
                $media = $getprops->user->profile->getMedia(); 
                $location = $getprops->user->profile->location;
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
                $img = Storage::disk('dospace')->url($getFirstMedia->id.'/'.$getFirstMedia->file_name);
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
                    <img class="img-fluid" src="{{ $img }}" onerror="this.src='{{ asset('imgs/default/conversions/default.jpg') }}';"  alt="Product Image">
                    <div class="prod_btn d-flex content-justify-center align-items-center">
                        {{--
                        @if(isset($data['type']) && $data['type']=='shop')
                            <a href="{{route('shop.productdetail',$getprops->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                        @else
                            <a href="{{route('market.productdetail',$getprops->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                        @endif--}}
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                @if(isset($data['type']) && $data['type']=='shop')
                                    <a href="{{route('shop.productdetail',$getprops->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                @else
                                    <a href="{{route('market.productdetail',$getprops->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                @endif
                            </div>
                            <div class="col-md-12 pt-3">
                                <div class="row no-gutters ">
                                    <div class="col-4">
                                        <div class="row no-gutters">
                                            <div class="col-md-12">
                                                <span class="lnr lnr-heart scolor"></span>
                                            </div>
                                            <div class="col-md-12 text-white font-weight-bold">
                                                <span>35</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="lnr lnr-bubble mcolor3"></span>
                                            </div>
                                            <div class="col-md-12 text-white font-weight-bold">
                                                @php 
                                                    $getUserRateOfProduct = \willvincent\Rateable\Rating::distinct()->where('rateable_id',$getprops->id); 
                                                @endphp
                                                <span>{{$getUserRateOfProduct->count()??0}}</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-md-12"> 
                                                <div style="padding-bottom:3px;" class="rateproduct" data-rating="{{$getprops->averageRating}}">
                                                    <input  type="hidden" name="score">
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-white font-weight-bold"> 
                                                <span>{{number_format($getprops->averageRating, 2, '.', ',')}} ({{$getprops->sumRating}})</span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.prod_btn -->
                </div>
                <!-- end /.product__thumbnail -->

                <div class="product-desc">
                    <a href="javascript:void(0)" class="product_title">
                        <h4 class="trucate" title="{{$getprops->name}}">{{$getprops->name??''}}</h4>
                    </a>
                    <ul class="titlebtm">
                        <li>
                            @if(isset($avatar) && !empty($avatar))
                                <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image"> 
                            @else
                                <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                            @endif 
                            <p>
                                <a href="#">{{$getprops->user->name??''}}</a>
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
                                        <span>{{$location}}</span>
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
                        </li>
                        --}}
                    </ul>

                </div>
                <!-- end /.product-desc -->
                <div class="product-purchase pb-1"> 
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
                    </div>
                    --}}
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
                                            <span title="${{null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price}}">${{number_format(null !==$getprops->discount && is_numeric($getprops->discount)?getDiscount($getprops->price,$getprops->discount):$getprops->price, 2, '.', '')}}</span> 
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
                    @if(isset($data['type']) && $data['type']=='shop')
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <button style="line-height:inherit;" class="btn w-100 btn--icon btn-sm float-right p-2">
                                    <span class="lnr lnr-cart"></span>@lang('frontlabel.addtocard')
                                </button>
                            </div>
                        </div>
                    @endif
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