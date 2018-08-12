@extends('layouts.app-layout')
@section('content')

@include('elements.search')

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2">
                    <div class="pull-left">
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <!-- Request::url() get current url --> 
                                    <form action="{{ Request::url() }}" method="get">
                                        <!-- Request::query('record') is get param  -->
                                        <input type="hidden" value="{{ Request::query('record') ?? 25 }}" name="record">
                                        <select name="price"> 
                                            <option value="low" {{isset($data['order']) ? $data['order']=='asc'?'selected':'':''}}>Price : Low to High</option>
                                            <option value="high" {{isset($data['order']) ? $data['order']=='desc'?'selected':'':''}}>Price : High to low</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </form>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <!-- Request::url() get current url -->
                                    <form action="{{ Request::url() }}">
                                        <!-- Request::query('price') is get param  -->
                                        <input type="hidden" value="{{ Request::query('price') ?? 'low' }}" name="price">
                                        <select name="record">
                                            <option value="12" {{isset($data['record'])?$data['record']==12?'selected':'':''}}>12 Items per page</option>
                                            <option value="15" {{isset($data['record'])?$data['record']==15?'selected':'':''}}>15 Items per page</option>
                                            <option value="25" {{isset($data['record'])?$data['record']==25?'selected':'':''}}>25 Items per page</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </form>
                                </div>
                            </div> 
                        </div>
                        <div class="pull-right">
                            <div class="filter__option filter--dropdown filter--range">
                                <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                    <span class="lnr lnr-chevron-down"></span>
                                </a>
                                <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                    <div class="range-slider price-range"></div>

                                    <div class="price-ranges">
                                        <span class="from rounded">$30</span>
                                        <span class="to rounded">$300</span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__option filter--layout">
                                <a href="javascript:void(0)">
                                    <div class="svg-icon"><img class="svg" src="{{asset('images/svg/grid.svg')}}" alt="it's just a layout control folks!"></div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="svg-icon"><img class="svg" src="{{asset('images/svg/list.svg')}}" alt="it's just a layout control folks!"></div>
                                </a>
                            </div>
                        </div>
                    </div><!-- end filter-bar -->
                </div><!-- end /.col-md-12 -->
            </div><!-- end filter-bar -->
        </div>
    </div>
    <!--================================
        END FILTER AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================--> 
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container"> 
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-md-3">
                    
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar"> 
                        <div class="sidebar-card card--category">
                            
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse"  aria-expanded="true" aria-controls="collapse1">
                                <h4 >Categories <span class="lnr lnr-chevron-down"></span></h4>
                            </a> 
                            <div class="collapse in collapsible-content show" id="collapse1" style="padding:0;">
                                <div class="tree well">
                                    <ul> 
                                        <!-- renderNode call from helpers.php in app/helpers.php -->
                                        @if(isset($data['nest']) && !empty($data['nest']))
                                            @foreach($data['nest'] as $node)
                                                @php 
                                                    // $r is route link
                                                    $r=route('market.dynamiccat');
                                                @endphp
                                                {!!renderNode($node,$r)!!}
                                            @endforeach
                                        @else
                                            <p>No category</p>
                                        @endif 
                                    </ul>
                                </div> 
                            </div><!-- end /.collapsible_content --> 
                        </div><!-- end /.sidebar-card -->  
                        </aside><!-- end aside -->
                </div><!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-md-9 cAllProducts"> 
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
                </div><!-- end /.col-md-9 -->
            </div><!-- end /.row -->
            
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
            
        </div><!-- end /.container -->

    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->
@section('cusomescript')
<script type="text/javascript">
    $(document).ready(function(){ 
        $('div.rateproduct.cproduct').raty(
            { 
                starOff   :"{{asset('imgs/0.png')}}",
                iconRange: [            
                    { range: 1, on: "{{asset('imgs/1.png')}}"},
                    { range: 2, on: "{{asset('imgs/2.png')}}"},
                    { range: 3, on: "{{asset('imgs/3.png')}}"},
                    { range: 4, on: "{{asset('imgs/4.png')}}"},
                    { range: 5, on: "{{asset('imgs/5.png')}}"}
                ], 
                readOnly:true,
                score: function() {
                    return $(this).attr('data-rating');
                }
            }
        );
    });
</script>
@stop 
<!--================================
    START COUNTER UP AREA
=================================-->
{{--@include('elements.membercount')--}}
<!--================================
    END COUNTER UP AREA
=================================-->
<!--================================
    START CALL TO ACTION AREA
=================================-->
@include('elements.joinshop')

@stop