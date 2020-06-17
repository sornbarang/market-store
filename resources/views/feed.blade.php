@extends('layouts.app-layout',['home_page'=>'feeds']) 
@section('content')
<section class="blog_area section--padding2" style="background: #3b7a5e;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($products as $product)
                <div class="single_blog blog--default">
                        <div class="price p-1 m-0 c-price text-center" style="right:15px;">
                            <h1>
                            <span> <sup>$</sup> {{ $product->price }}</span>
                            </h1>
                        </div>
                        <figure>
                            @php
                              $thumbnail = $product->getFirstMedia(); 
                                if($thumbnail){
                                    $img = Storage::disk('dospace')->url($thumbnail->id.'/'.$thumbnail->file_name);
                                }else{
                                    $img = asset('imgs/default/conversions/default.jpg');
                                }  
                            @endphp

                            <img src="{{$img}}" alt="Blog image">
    
                            <figcaption>
                                <div class="blog__content">
                                    <a href="{{route('market.productdetail',$product->slug)}}" class="blog__title">
                                        <h4>{{$product->name}}</h4>
                                    </a>
    
                                    <div class="blog__meta">
                                            <div class="comment_view">
                                                    <p class="comment">
                                                        <span class="lnr lnr-heart scolor"></span>0 Likes
                                                        <span class="lnr lnr-bubble mcolor3"></span>0 Comments</p>
                                                    <p class="view">
                                                </div>
                                        
                                        <!--<div class="date_time">
                                            <span class="lnr lnr-clock"></span>
                                            <p>13 HOURS AGO</p>
                                        </div>-->
                                        <div class="author">
                                                <span class="lnr lnr-user"></span>
                                                <p>by
                                                <a href="{{route('market.mystore',$product->user->id)}}">{{isset($product->user)?$product->user->name:''}}</a>
                                                </p>
                                            </div>
                                        
                                    </div>
                                </div>
    
                                <div class="btn_text">
    
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end /.single_blog -->
                @endforeach
                
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--blog">
                    <div class="sidebar-card sidebar--post card--blog_sidebar">
                        <div class="card-title">
                            <!-- Nav tabs -->
                            <ul class="nav post-tab" role="tablist">
                                <li>
                                    <a href="#popular" class="active" id="popular-tab" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Latest Posts</a>
                                </li>
                                <li>
                                    <a href="#latest" id="latest-tab" aria-controls="latest" role="tab" data-toggle="tab" aria-selected="false">For You</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade show" id="popular" aria-labelledby="popular-tab">
                                    <ul class="post-list">
                                    @foreach ($last_products as $last_product)
                                    @php
                                    $last_p_thumbnail = $last_product->getFirstMedia(); 
                                        if($last_p_thumbnail){
                                            $last_p_img = Storage::disk('dospace')->url($last_p_thumbnail->id.'/'.$last_p_thumbnail->file_name);
                                        }else{
                                            $last_p_img = asset('imgs/default/conversions/default.jpg');
                                        }  
                                    @endphp
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="{{$last_p_img}}" alt="blog thumbnail">
                                            </div>
                                            
                                            <div class="title_area">
                                                <a href="{{route('market.productdetail',$last_product->slug)}}">
                                                    <h4>{{$last_product->name}}</h4>
                                                </a>
                                                <!-- <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>24 Feb 2017</p>
                                                </div> -->
                                            </div>
                                            
                                        </li>
                                    @endforeach
                                    </ul>
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->

                                <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                                    <ul class="post-list">
                                        <!-- <li>
                                            <div class="thumbnail_img">
                                                <img src="{{asset('images/blog_thumb2.jpg')}}" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>Best free jQuery image gallery plugins 2017</h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>24 Feb 2017</p>
                                                </div>
                                            </div>
                                        </li> -->
                                        
                                    </ul>
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <!-- <div class="sidebar-card card--blog_sidebar card--tags">
                        <div class="card-title">
                            <h4>Categories</h4>
                        </div>

                        <ul class="tags">
                            <li>
                                <a href="#">Branding</a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- end /.sidebar-card -->

                    <!-- <div class="banner">
                        <img src="{{asset('images/banner.jpg')}}" alt="Banner">
                        <div class="banner_content">
                            <h1>Banner</h1>
                            <p>360x270</p>
                        </div>
                    </div> -->

                    <!-- end /.banner -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
@endsection