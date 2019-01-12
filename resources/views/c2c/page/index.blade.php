@extends('layouts.app-layout')
@section('content')   
<!--================================
    END FEATURED PRODUCT AREA
=================================-->
@include('elements.search')
<style>
    .breadcrumb ul li:after{
        color:#000 !important;
    }
</style>
<section class="products section--padding" style="padding-top:0px !important;">
    <div class="shortcode_wrapper">
        <div class="container"> 
            <div class="row callCategory p-3">
                @include('elements.top-category')         
            </div>
            @if(count($data['listcats']) > 0)
                @foreach($data['listcats'] as $key =>  $cats)
                    @php 
                        $subcat=[];
                    @endphp
                    @foreach($cats['childreen'] as $k =>  $getsub)
                        @php  
                            $subcat[]=array('dynamiccat'=>route('market.dynamiccat',$getsub->slug),'link'=>route('market.getproductofcategory',$getsub->slug),'name'=>$getsub->name);
                        @endphp 
                    @endforeach
                    <div class="row blog-explor-breadcrum">
                        <div class="col-md-12"> 
                            <div class="shortcode_module_title"  style="padding:10px;">
                                <div class="dashboard__title"> 
                                    <div class="breadcrumb">
                                        <ul> 
                                            @php 
                                                $firstRoute='javascript:void(0)';
                                            @endphp
                                            @foreach($subcat as $key => $val)
                                                <li> 
                                                    @if($key==0)
                                                        @php 
                                                            $firstRoute=$val['dynamiccat'];
                                                        @endphp
                                                    @endif
                                                    <a id="getProductOfCategory" data-routepro="{{$val['dynamiccat']}}" data-route="{{$val['link']}}" href="javascript:void(0)" style="color:#000;" class="text-capitalize {{$key==0?'activecat':''}}">{{$val['name']}}</a>
                                                </li>
                                            @endforeach
                                            <li style="float:right;">   
                                                {{--<a  href="{{$firstRoute}}" id="exploreCategory" style="color:#000;">Explore &nbsp; <span style="font-size:20px;color:#56a72d" class="lnr lnr-rocket"></span></a>--}}
                                                <a  class="d-flex justify-content-center align-items-center" href="{{$firstRoute}}" id="exploreCategory" style="color:#000;">Explore &nbsp; <div data-lottie="{{asset('json/bms-rocket.json')}}" class="position-relative roket" style="width:35px;height:35px;float:right"></div> </a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
 
                    <div class="row pt-4 pb-4"> 
                        <div class="position-relative" style="width:50px;height:50px;margin:0 auto;" id="lottie"></div> 
                        <div class="col-md-12 blog-products-container position-relative"> 
                            <div class="partners">
                                @include('elements.home-product')
                            </div>
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
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No product</p>
            @endif
        </div>
    </div>
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        {{--<div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>Newest Release Products</h2>
                    </div>

                    <div class="filter__menu">
                        <p>Filter by:</p>
                        <div class="filter__menu_icon">
                            <img class="svg" src="{{asset('/')}}images/svg/menu.svg" alt="">

                            <ul class="filter_dropdown">
                                <li><a href="#">Trending items</a></li>
                                <li><a href="#">Best seller</a></li>
                                <li><a href="#">Best rating</a></li>
                                <li><a href="#">Low price</a></li>
                                <li><a href="#">High price</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end /.col-md-12 -->
        </div>--}}
        <!-- end /.row -->
        <!-- start .row -->
        {{--
        <div class="row">  
            @foreach ($data['category'] as $cat)
                @php  
                    foreach($cat->translations as $lang){
                        if($lang->locale==app()->getLocale()){
                            $link=['link'=>route('market.dynamiccat',$lang->categories_ads_id),'name'=>$lang->name];
                        }
                    }
                @endphp
                    <!-- start .col-md-4 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- start .single-product -->
                        <div class="product product--card product--card3">
                            <div class="product__thumbnail">
                                <img src="{{ asset('images/p1.jpg') }}" alt="Product Image">
                                <div class="prod_btn">  
                                    <a href="{{route('market.dynamiccat',$cat['id'])}}" class="transparent btn--sm btn--round">@lang('frontlabel.moreinfo')</a>
                                </div><!-- end /.prod_btn -->
                            </div><!-- end /.product__thumbnail -->

                            <div class="product-desc" style="height:75px;"> 
                                <a href="{{route('market.dynamiccat',$cat['id'])}}" class="product_title">
                                    <h4>{{$cat['name']}}</h4>
                                </a> 
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                        <p><a href="#">99</a></p>
                                    </li>
                                    <li class="out_of_class_name">
                                        <div class="sell"><p><span class="lnr lnr-cart"></span><span>27</span></p></div>
                                        <div class="rating product--rating">
                                            <ul>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star-half-o"></span></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end /.product-desc -->
                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>{{$cat['count']}}</span>
                                </div>
                                <a href="#"><span class="lnr lnr-book"></span> Products</a>
                            </div><!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div><!-- end /.col-md-4 -->
            @endforeach

        </div>
        --}}
        <!-- start .row -->
        {{--<div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="all-products.html" class="btn btn--lg btn--round">@lang('frontlabel.allpro')</a>
                </div>
            </div><!-- end ./col-md-12 -->
        </div>--}}<!-- end /.row -->
    </div><!-- end /.container -->
</section>
<!--================================
    END PRODUCTS AREA
=================================-->

<!--================================
    START COUNTER UP AREA
=================================-->
{{--@include('elements.membercount')--}}
<!--================================
    END COUNTER UP AREA
=================================-->


<!--================================
    START WHY CHOOSE US AREA
=================================-->
{{--<section class="why_choose section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Why Choose <span class="highlighted">MartPlace</span></h1>
                    <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</p>
                </div>
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .reason -->
                <div class="feature2">
                    <span class="feature2__count">01</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-license pcolor"></span>
                        <h3 class="feature2-title">One Time Payment</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">02</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-magic-wand scolor"></span>
                        <h3 class="feature2-title">Quality Products</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">03</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-lock mcolor1"></span>
                        <h3 class="feature2-title">100% Secure Paymentt</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">04</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-chart-bars mcolor2"></span>
                        <h3 class="feature2-title">Well Organized Code</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">05</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-leaf mcolor3"></span>
                        <h3 class="feature2-title">Life Time Free Update</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">06</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-phone mcolor4"></span>
                        <h3 class="feature2-title">Fast and Friendly Support</h3>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                            the mattis, leo quam aliquet diam
                            congue is laoreet elit metus.</p>
                    </div><!-- end /.feature2__content -->
                </div><!-- end /.feature2 -->
            </div><!-- end /.col-md-4 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>--}}
<!--================================
    END WHY CHOOSE US AREA
=================================-->


<!--================================
    START SPECIAL FEATURES AREA
=================================-->
{{--<section class="special-feature-area bgcolor2 special-feature--2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="special-feature feature--1">
                    <img src="{{asset('/')}}images/spf1.png" alt="Special Feature image">
                    <h3 class="special__feature-title">30 Days Money Back <span class="highlight">Guarantee</span></h3>
                </div>
            </div><!-- end /.col-md-6 -->
            <div class="col-md-6">
                <div class="special-feature feature--2">
                    <img src="{{asset('/')}}images/spf2.png" alt="Special Feature image">
                    <h3 class="special__feature-title">Fast and Friendly <span class="highlight">Support</span></h3>
                </div>
            </div><!-- end /.col-md-6 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>--}}
@section('cusomescript')
<script type="text/javascript">
    $(document).ready(function(){ 
        $('div.rateproduct,div.rateproducthover').raty(
            { 
                starOff   :"{{asset('imgs/no.png')}}",
                iconRange: [            
                    { range: 1, on: "{{asset('imgs/0.png')}}"},
                    { range: 2, on: "{{asset('imgs/1.png')}}"},
                    { range: 3, on: "{{asset('imgs/2.png')}}"}
                ],   
                hints: ['unlike','normal','love'],
                readOnly:true,
                single:true,
                number:3,
                score: function() {
                    if($(this).attr('data-rating') >=4){
                        $num=3;
                    }else if($(this).attr('data-rating') < 4 && $(this).attr('data-rating') >= 2 ){
                        $num=2;
                    }else if($(this).attr('data-rating') < 2 && $(this).attr('data-rating') >= 1 ){
                        $num=1;
                    }else{
                        $num=2;
                    }
                    return $num;
                }
            }
        );
    });
</script>
@stop 
<!--================================
    END SPECIAL FEATURES AREA
=================================-->

<!--================================
    START CALL TO ACTION AREA
=================================-->
{{--
    
    @include('elements.joinshop')

--}}
<!--================================
    END CALL TO ACTION AREA
=================================-->
@stop 
