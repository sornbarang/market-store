<!-- start .row -->
<div class="row">
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
    <div class="col-lg-4 col-md-6">
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
                <div class="row">
                    <div class="col text-md-left col-xs-12 col-sm-6 col-md-6">
                        <div class="price_love">
                            <span title="{{$val->price}}">$ {{str_limit($val->price,10)??0}}</span> 
                        </div>
                    </div>
                    <div class="cflexcenter col text-xs-right  col-xs-12 col-sm-6 col-md-6">
                    <div class="sell">
                        <a href="javascript:void(0)">
                            <div class="raty rateproduct" data-rating="{{$val->averageRating}}">
                                <input  type="hidden" name="score">
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div><!-- end /.product-purchase --> 
        </div>
        <!-- end /.single-product -->
    </div>
    <!-- end /.col-md-4 -->
    @endforeach
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