<!-- start .row -->
<div class="row"> 
    @if(null !==$data['searchpros'] && $data['searchpros']->count() > 0)
        @foreach($data['searchpros'] as $val)
            @php
                $img=''; 
                $getFirstMedia = $val->getFirstMedia();  
                //$getUrlThum=$getFirstMedia->getUrl('thumb');  
                if($getFirstMedia){
                    $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                }else{
                    $img = asset('imgs/default/conversions/default.jpg');
                }
            @endphp
            <!-- start .col-md-4 -->
            <div class="col-lg-3 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card"> 
                    <div class="product__thumbnail">
                        <img src="{{$img}}" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                            {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>{{$val->getTranslation(app()->getLocale())->name}}</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                <p>
                                    <a href="#">{{$val->user->name}}</a>
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
                    <div class="product-purchase"> 

                        {{--
                        <div class="w-100 text-price pt-1 pb-1">
                            @if(null !==$val->discount && is_numeric($val->discount) && (int)$val->discount !=0)
                                <div class="row">
                                    <div class="col-6 text-truncate text-left text-danger">
                                        {{round($val->discount, 2)}}% Off
                                    </div>
                                    <div class="col-6 text-truncate text-right"> 
                                        <span title="${{null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price}}">${{null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price}}</span> 
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
                                                <span title="${{null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price}}">${{str_limit(null !==$val->discount && is_numeric($val->discount)?getDiscount($val->price,$val->discount):$val->price,5)}}</span> 
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