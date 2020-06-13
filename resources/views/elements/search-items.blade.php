<!-- start .row -->
<div class="row"> 
    @if(null !==$data['searchpros'] && $data['searchpros']->count() > 0)
        @foreach($data['searchpros'] as $val)
            @php
                $avatar='';
                if(isset($val->user->profile)){
                    $media = $val->user->profile->getMedia(); 
                    foreach($media as $m){   
                        if($val->user->profile->avatar == $m->id){
                            $avatar=$m->id.'/'.$m->file_name;  
                        }
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
                    $img = Storage::disk('dospace')->url($getFirstMedia->id.'/'.$getFirstMedia->file_name);
                }else{
                    $img = asset('imgs/default/conversions/default.jpg');
                }
            @endphp
           
            <!-- start .col-md-4 -->
            <div class="col-lg-3 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card"> 
                    <div class="product__thumbnail" style="height:160px;">
                        <img src="{{$img}}" alt="Product Image">
                        <div class="prod_btn">
                            @if(isset($data['type']) && $data['type']=='shop')
                                <a href="{{ route('shop.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                            @else 
                                <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                            @endif
                            <div class="row no-gutters">
                                {{--<div class="col-md-12">
                                    @if(isset($data['type']) && $data['type']=='shop')
                                        <a href="{{route('shop.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                    @else
                                        <a href="{{route('market.productdetail',$val->slug)}}" class="transparent btn--sm btn--round">More Info</a>
                                    @endif
                                </div>--}}
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
                                                        $getUserRateOfProduct = \willvincent\Rateable\Rating::distinct()->where('rateable_id',$val->id); 
                                                    @endphp
                                                    <span>{{$getUserRateOfProduct->count()??0}}</span>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-md-12"> 
                                                    <div style="padding-bottom:3px;" class="raty rateproduct" data-rating="{{$val->averageRating}}">
                                                        <input  type="hidden" name="score">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-white font-weight-bold"> 
                                                    <span>{{number_format($val->averageRating, 2, '.', ',')}} ({{$val->sumRating}})</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="#" class="product_title"> 
                            <h4>{{$val->getTranslation(app()->getLocale())->name}}</h4>
                            {{--<h4>{{$val->name??''}}</h4>--}}
                        </a>
                        <ul class="titlebtm">
                            <li>
                                @if(isset($avatar) && !empty($avatar))
                                    <img class="auth-img" src="{{Storage::disk('dospace')->url($avatar)}}" alt="author image">
                                @else
                                    <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                @endif 
                                <p>
                                    <a href="#">{{$val->user->name??''}}</a>
                                </p>
                            </li>
                            <!-- <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>Plugin</a>
                            </li> -->
                        </ul>

                        <p>{{ !empty($val->user->profile->bio) ? $val->user->profile->bio : '' }}</p>
                    </div>
                    <!-- end /.product-desc --> 
                    <div class="product-purchase p-2">  
                        <div class="row no-gutters d-flex content-justify-center align-items-center">
                            <div class="col-8 text-truncate">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                            @if(null !==$val->discount && is_numeric($val->discount) && (int)$val->discount !=0)
                                            <div class="w-100 text-price text-center">
                                                <span title="${{$val->price??0}}"><del>${{str_limit($val->price??0,5)}}<del></span> 
                                            </div>
                                        @else
                                            <div class="w-100">
                                                &nbsp;
                                            </div>
                                        @endif
                                        <div class="w-100">
                                            <div class="price_love w-100 text-center">
                                                <span title="${{null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price}}">${{number_format(null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price, 2, '.', '')}}</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div style="white-space:normal;" class="col-md-4 text-center align-self-center text-danger font-weight-bold">
                                        @if(null !==$val->discount && is_numeric($val->discount) && (int)$val->discount !=0)
                                            {{round($val->discount, 2)}} % Off
                                        @else
                                            &nbsp;
                                        @endif
                                    </div>
                                </div> 
                            </div>
                            <div class="col-4 text-truncate"> 
                                <a href="javascript:void(0)">
                                    <div class="raty rateproduct" data-rating="{{$val->averageRating}}">
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
                    </div><!-- end /.product-purchase --> 
                </div>
                <!-- end /.single-product -->
            </div>
            <!-- end /.col-md-4 -->
        @endforeach
    @else
        <div class="col-12 display-1 text-white text-center">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <p class="text-center text-white">@lang('frontlabel.norecord') {{request()->searchstr??''}}</p>
        </div>
    @endif
</div>
<!-- end /.row -->

<div class="row pt-0 pb-4">
    <div class="col-md-12">
        <div class="pagination-area">
            <nav class="navigation pagination m-0 p-0" role="navigation">
                <div class="nav-links">
                {{$data['searchpros']->appends(['searchstr' => request()->searchstr])->links()}}
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- end /.row -->