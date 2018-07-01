@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

<!--================================
        START BREADCRUMB AREA
    =================================-->
@include('elements.customer-breadcrumb')
<!--================================
    END BREADCRUMB AREA
=================================-->
@if (Route::has('login'))
    @auth
    <!-- Modals -->
    <div class="modal fade rating_modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Give Feedback on This Post</h3>
                    <h4>Product</h4>
                    <p>by
                        <a href="author.html">{{$data['product']->user->name}}</a>
                    </p>
                </div>
                <div class="container"> 
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="card_style2 nudity"> 
                                Nudity 
                            </div>
                            <!-- end /.single_job -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="card_style2 violence">
                                Violence
                            </div>
                            <!-- end /.card_style2 -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="card_style2 spam"> 
                                Spam
                            </div>
                            <!-- end /.card_style2 -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="card_style2 falseproduct"> 
                                False Product
                            </div>
                            <!-- end /.card_style2 -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card_style2 unauthorizedsales"> 
                                Unauthorized Sales
                            </div>
                            <!-- end /.card_style2 -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card_style2 harassment"> 
                                Harassment
                            </div>
                            <!-- end /.card_style2 -->
                        </div>
                        <!-- end /.col-md-6 -->
                    </div>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <form id="frmReport">
                        <input type="hidden" id="myreport" name="reason">
                        {{--<ul>
                            <li>
                                <p>Your Rating</p>
                                <div class="right_content btn btn--round btn--white btn--md">
                                    <select name="rating" class="give_rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </li>

                            <li>
                                <p>Rating Causes</p>
                                <div class="right_content">
                                    <div class="select-wrap">
                                        <select name="review_reason" id="rev">
                                            <option value="design">Design Quality</option>
                                            <option value="customization">Customization</option>
                                            <option value="support">Support</option>
                                            <option value="performance">Performance</option>
                                            <option value="documentation">Well Documented</option>
                                        </select>

                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>--}}

                        <div class="rating_field">
                            <label for="rating_field">Comments</label>
                            <textarea name="commemnt_reporter" id="commemnt_reporter" class="text_field" placeholder="Please enter your comment report for this post"></textarea>
                            <p class="notice">Your review will be ​publicly visible​ and the author may reply to your comments. </p>
                        </div>
                        <button type="button" class="btn btn--round btn--default">Submit</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                    </form>
                    <!-- end /.form -->
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div> 
    @endauth 
@endif

@php 
    $media = $data['product']->getMedia();
@endphp
<!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            @foreach( $media as $val)
                                <div class="prev-slide"><img src="{{Storage::url($val->id.'/'.$val->file_name)}}" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            @endforeach
                        </div><!-- end /.item--preview-slider -->

                        <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
                                    @foreach( $media as $key => $val)
                                        <div class="item-thumb"><img src="{{Storage::url($val->id.'/conversions/'.$val->file_name)}}" alt="This is the thumbnail of the item"></div>
                                    @endforeach
                                </div><!-- end /.thumb-slider -->

                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-left lnr-arrow-left"></span>
                                    <span class="lnr nav-right lnr-arrow-right"></span>
                                </div><!-- end /.prev-nav -->
                            </div>

                            {{--<div class="item-action">
                                <div class="action-btns">
                                    <a href="#" class="btn btn--round btn--lg">Live Preview</a>
                                    <a href="#" class="btn btn--round btn--lg btn--icon"><span class="lnr lnr-heart"></span>Add To Favorites</a>
                                </div>
                            </div>--}}<!-- end /.item__action -->
                            <div class="item_social_share">
                            @if (Route::has('login'))
                                @auth
                                    <p>
                                        <a href="#" class="myfeedback" data-target="#myModal1" data-toggle="modal">
                                            <span class="fa fa-exclamation"></span> Give feedback this post
                                        </a>
                                    </p>
                                @endauth
                            @endif
                                <p>
                                    <img src="{{ asset('images/svg/share.svg') }}" alt="This is share svg">
                                    <span>@lang('frontlabel.shareitem')</span>
                                </p>

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="#">
                                                <span class="fa fa-pinterest"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- end /.social-->

                            </div>
                        </div><!-- end /.item__preview-thumb-->


                    </div><!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                                </li>
                                {{--<li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Reviews
                                        <span>(35)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">Support</a>
                                </li>
                                <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">item FAQ</a>
                                </li>--}}
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                @foreach($data['product']->translations as $val)
                                    @if($val->locale==app()->getLocale())
                                        {!!$data['product']->translations[0]->description!!}
                                    @endif
                                @endforeach
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                    <ul class="media-list thread-list">
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m1.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag buyer">Purchased</span>
                                                        <a href="#" class="reply-link">Reply</a>
                                                    </div>
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. </p>
                                                </div>
                                            </div>

                                            <!-- nested comment markup -->
                                            <ul class="children">
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="{{ asset('images/m2.png') }}" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>AazzTech</h4>
                                                                <span>6 Hours Ago</span>
                                                            </div>
                                                            <span class="comment-tag author">Author</span>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet congue
                                                                placerat mi id nisi interdum mollis. </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="{{ asset('images/m1.png') }}" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>Themexylum</h4>
                                                                <span>9 Hours Ago</span>
                                                            </div>
                                                            <span class="comment-tag buyer">Purchased</span>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet congue
                                                                placerat mi id nisi interdum mollis. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m2.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--md btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->

                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m3.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <a href="#" class="reply-link">Reply</a>
                                                    </div>
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m2.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->

                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m4.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <a href="#" class="reply-link">Reply</a>
                                                    </div>
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m2.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->

                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m5.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <a href="#" class="reply-link">Reply</a>
                                                    </div>
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{ asset('images/m2.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination" role="navigation">
                                            <div class="nav-links">
                                                <a class="page-numbers current" href="#">1</a>
                                                <a class="page-numbers" href="#">2</a>
                                                <a class="page-numbers" href="#">3</a>
                                                <a class="next page-numbers" href="#">
                                                    <span class="lnr lnr-arrow-right"></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->

                                    <div class="comment-form-area">
                                        <h4>Leave a comment</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{{ asset('images/m7.png') }}" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>
                                    <!-- end /.comment-form-area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div><!-- end /.col-md-8 -->

                <div class="col-md-4">
                    <aside class="sidebar sidebar--single-product">
                        {{--<div class="sidebar-card card-pricing">
                            <div class="price"><h1><sup>$</sup>20 - <sup>$</sup>60</h1></div>
                            <ul class="pricing-options">
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                        <label for="opt1"><span class="circle"></span>Single Site License – <span class="pricing__opt">$20.00</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" name="filter_opt">
                                        <label for="opt2"><span class="circle"></span>2 Sites License – <span class="pricing__opt">$40.00</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt3" class="" name="filter_opt">
                                        <label for="opt3"><span class="circle"></span>Multi Site License – <span class="pricing__opt">$60.00</span></label>
                                    </div>
                                </li>
                            </ul><!-- end /.pricing-options -->

                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn--round">Purchase Now</a>
                                <a href="#" class="btn btn--lg btn--round cart-btn"><span class="lnr lnr-cart"></span> Add To Cart</a>
                            </div><!-- end /.purchase-button -->
                        </div>--}}<!-- end /.sidebar--card -->

                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup>$</sup>
                                    <span>{{$data['product']->price}}</span>
                                </h1>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->
                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-heart scolor"></span>@lang('frontlabel.favourites')</p>
                                    <span>240</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>@lang('frontlabel.comments')</p>
                                    <span>35</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-eye mcolor4"></span>@lang('frontlabel.views')</p>
                                    <span>6,589</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.sidebar-card --> 

                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4>@lang('frontlabel.proinfo')</h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    <a href="{{route('market.mystore',$data['product']->user->id)}}"><img src="{{asset('/')}}images/author-avatar.jpg" alt="Presenting the broken author avatar :D"></a>
                                </div>

                                <div class="author">
                                    <h4>{{ucfirst($data['product']->user->name)}}</h4>
                                    <p>Signed Up: {{$data['product']->user->created_at}}</p>
                                </div><!-- end /.author -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                    </ul>
                                </div><!-- end /.social -->

                                <div class="author-btn">
                                    <a href="{{route('market.mystore',$data['product']->user->id)}}" class="btn btn--sm btn--round">@lang('frontlabel.viewprofile')</a>
                                    <a href="#" class="btn btn--sm btn--round">@lang('frontlabel.sentmessage')</a>
                                </div><!-- end /.author-btn -->
                            </div><!-- end /.author-infos -->


                        </div><!-- end /.author-card -->
                    </aside><!-- end /.aside -->
                </div><!-- end /.col-md-4 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    @if(isset($data['relateProByUser']))
    <section class="more_product_area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>@lang('frontlabel.moreitems') <span class="highlighted"> {{ucfirst($data['product']->user->name)}}</span></h1>
                    </div>
                </div><!-- end /.col-md-12 -->
                
                <!-- start .col-md-4 -->
                @php
                    //print_r($data['relateProByUser']);
                @endphp
                @foreach($data['relateProByUser'] as $val)
                    @php
                        $img='';
                        $getMediaRelation=$val->getMedia();
                        $getFirstMedia = $val->getFirstMedia(); 
                        if($getFirstMedia){
                            $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                        } 
                    @endphp
                <div class="col-md-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{$img}}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{{ route('market.productdetail',$val->id) }}" class="transparent btn--sm btn--round">More Info</a>
                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                            </div><!-- end /.prod_btn -->
                        </div><!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title"><h4>{{$val->name}}</h4></a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth3.jpg" alt="author image">
                                    <p><a href="#">{{ucfirst($val->user->name)}}</a></p>
                                </li>
                                <li class="product_cat">
                                    <a href="#"><img src="{{asset('/')}}images/cathtm.png" alt="category image">Plugin</a>
                                </li>
                            </ul>

                            @foreach($val->translations as $v)
                                @if($v->locale==app()->getLocale())
                                    {!!$v->description!!}
                                @endif
                            @endforeach
                        </div><!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$ {{$val->price??'No'}}</span>
                                {{--<p><span class="lnr lnr-heart"></span> 48</p>--}}
                            </div>

                            {{--<div class="rating product--rating">
                                <ul>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star-half-o"></span></li>
                                </ul>
                            </div>--}}
                            {{--<div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>--}}
                        </div><!-- end /.product-purchase -->
                    </div><!-- end /.single-product -->
                </div><!-- end /.col-md-4 -->
                @endforeach
                </div><!-- end /.container -->
            </div><!-- end /.container -->
    </section>
    @endif
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')

    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop