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
                        <div class="pull-right">
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
    @php
       
        $profilters = ['Trending Products','Popular Products','New Products','Best Seller','Best Rating','Free Support','On Sale'];
        $products = ['Finance and Consulting','Best Free Responsive','AppsPress - HTML5 ','Finance and Consulting','Best Free Responsive','AppsPress - HTML5 ','Finance and Consulting','Best Free Responsive','AppsPress - HTML5 '];
    @endphp
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
                            <div class="collapse in collapsible-content show" id="collapse1">
                                <div class="tree well">
                                    <ul>
                                        <li class="parent_li">
                                            <span class="parent_root"><i class="fa fa-folder-open icongreen"></i> All category</span>
                                            <!-- renderNode call from helpers.php in app/helpers.php -->
                                            @foreach($data['nest'] as $node)
                                                @php 
                                                    // $r is route link
                                                    $r=route('market.dynamiccat');
                                                @endphp
                                                {!!renderNode($node,$r)!!}
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                {{--<ul class="card-content"> 
                                    @if(isset($data['countcatpro']))
                                        @foreach($data['countcatpro'] as $key => $val)
                                            <li ><a class="{{$val['active']?'myactive':''}}" href="{{route('market.dynamiccat',$val['id'])}}"><span class="lnr lnr-chevron-right"></span>{{ucfirst($val['name'])}}<span class="item-count">{{$val['count']}}</span></a></li>
                                        @endforeach
                                    @endif
                                </ul>--}}
                            </div><!-- end /.collapsible_content --> 
                        </div><!-- end /.sidebar-card -->

                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapse2">
                                <h4>Filter Products<span class="lnr lnr-chevron-down"></span></h4>
                            </a>
                            <div class="collapse in collapsible-content" id="collapse2">
                                <ul class="card-content">
                                @foreach($profilters as $pro)
                                    <li><div class="custom-checkbox2"><input type="checkbox" id="opt{{ $loop->iteration }}" class="" name="filter_opt"> <label for="opt{{ $loop->iteration }}"><span class="circle"></span>{{$pro}}</label></div></li>
                                @endforeach
                            </ul>
                            </div>
                        </div><!-- end /.sidebar-card -->
    
                        <div class="sidebar-card card--slider">
                                <a class="card-title" href="#collapse3" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapse3">
                                    <h4>Filter Products<span class="lnr lnr-chevron-down"></span></h4>
                                </a>
                                <div class="collapse in collapsible-content" id="collapse3">
                                    <div class="card-content">
                                        <div class="range-slider price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 6%; width: 54%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 6%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>

                                        <div class="price-ranges">
                                            <span class="from rounded">$30</span>
                                            <span class="to rounded">$300</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->
                        </aside><!-- end aside -->
                </div><!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-md-9"> 
                        <div class="row"> 
                            @if(isset($data['product']) && !empty($data['product'])) 
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
                                    <div class="col-md-4 col-sm-4">
                                        <!-- start .single-product -->
                                        <div class="product product--card product--card-small">

                                            <div class="product__thumbnail">
                                                <img src="{{$img}}" alt="Product Image">
                                                <div class="prod_btn">
                                                    <a href="{{ route('market.productdetail',$val->id) }}" class="transparent btn--sm btn--round">@lang('frontlabel.moreinfo')</a>
                                                    {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                                                </div><!-- end /.prod_btn -->
                                            </div><!-- end /.product__thumbnail -->
                                            <div class="product-desc">
                                                <a href="#" class="product_title"><h4>{{$val->name}}</h4></a>
                                                <ul class="titlebtm">
                                                    <li>
                                                        @if(isset($avatar) && !empty($avatar))
                                                            <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image">
                                                        @else
                                                            <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                                        @endif 
                                                        <p><a href="#">{{$val->user->name}}</a></p>
                                                    </li> 
                                                    <li class="out_of_class_name">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p>
                                                                            <span class="flag-icon flag-icon-kh"></span>
                                                                            <span>Cam</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col">
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
                                                    <span title="${{$val->price??''}}">${{$val->price??''}}</span>
                                                </div>
                                                <a href="javascript:void(0)">
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
                                                </a>
                                            </div>
                                        </div><!-- end /.single-product -->
                                    </div><!-- end /.col-md-4 -->
                                @endforeach
                            @else
                                @lang('frontlabel.norecord') {{$data['cnode'] ?? ''}}
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