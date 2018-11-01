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
        @if(isset(Auth::user()->roles->pluck('name')[0])) 
            @if(Auth::user()->roles->pluck('name')[0]=='super-admin') 
                <!-- Modal confirm deleted product -->
                <div class="modal fade rating_modal item_remove_modal" id="myModalConfirmProduct" tabindex="-1" role="dialog" aria-labelledby="myModal2">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Are you sure to delete this item?</h3>
                                <p>You will not be able to recover this file!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- end /.modal-header -->
                            <form action="{{route('market.destroyproduct',$data['product']->slug)}}" method="POST"> 
                                {{ method_field('DELETE') }}
                                @csrf
                                <div class="modal-body">
                                    <button type="submit" class="btn btn--round btn-danger btn--default">Delete</button>
                                    <button class="btn btn--round modal_close" data-dismiss="modal">Cancel</button>
                            </div>
                            </form>
                            <!-- end /.modal-body -->
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endauth
@endif 
@if (Route::has('login'))
    @auth
    <!-- Modals Rating -->
    <div class="modal fade rating_modal" id="myModalRate" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Rating this Item</h3>
                    <h4>Product Enquiry Extension</h4>
                    <p>by
                        <a href="{{route('market.mystore',$data['product']->user->id)}}">{{$data['product']->user->name}}</a>
                    </p>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <form id="rateMarket">
                        @csrf
                        <input type="hidden" id="proId" name="id" value="{{$data['product']->id??''}}"/>
                        <div class="row no-gutters pt-3 pb-3">
                            <div class="col-4 d-flex content-justify-center align-items-center"><b>Your Rating </b></div>
                            <div class="col-8">
                                <div class="row"> 
                                    <div class="col-md-auto">
                                        <div class="d-flex content-justify-center align-items-center rateenable text-warning"></div>
                                    </div>
                                    <div class="col-md-4 d-flex content-justify-center align-items-center"><div id="hint" class="font-weight-bold"></div></div>
                                </div>
                                
                            </div>
                        </div>
                        {{--
                        <ul> 
                            <li>
                                <p>Your Rating</p>
                                <div class="rateenable"></div>
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
                                        <select name="review_reason">
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
                        </ul>
                        --}}
                        <div class="rating_field">
                            <label for="rating_field">Comments</label>
                            <textarea maxlength="50" name="rating_field" id="rating_field" class="text_field" placeholder="Please enter your rating reason to help the author"></textarea>
                            <p class="notice">Your review will be ​publicly visible​ and the author may reply to your comments. </p>
                        </div>
                        <button type="button" class="btn btn--round btn--default">Submit Rating</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                    </form>
                    <!-- end /.form -->
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>
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
                        <a href="{{route('market.mystore',$data['product']->user->id)}}">{{$data['product']->user->name}}</a>
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
                        <input type="hidden" id="product_id" name="product_id" value="{{$data['product']->id}}">
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
                            <textarea maxlength="100" name="commemnt_reporter" id="commemnt_reporter" class="text_field" placeholder="Please enter your comment report for this post"></textarea>
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
    $avatar='';
    if(null !== $data['product']->user->profile){
        $profile = $data['product']->user->profile->getMedia(); 
        foreach($profile as $val){  
            if($data['product']->user->profile->avatar==$val->id){
                $avatar=$val->id.'/avatar100.png';  
            } 
        }    
    }
@endphp
<!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8"> 
                    <div class="item-preview"> 
                        <div class="item__preview-slider"> 
                            @if(count($media) > 0)
                                @foreach($media as $val)
                                    <div class="prev-slide">
                                        <div class="row position-absolute w-100 no-gutters">
                                            <div class="col-3 text-center">
                                                 <div class="hot text-white bg-danger p-2 font-weight-bold rounded-0" style="z-index:9;max-width:100px;font-size:20px;">
                                                    HOT
                                                </div>
                                            </div>
                                            <div class="col-9 text-right"> 
                                                @if(null !==$data['product']->discount && is_numeric($data['product']->discount) && (int)$data['product']->discount !=0) 
                                                    <p class="m-0 p-0" style="line-height:inherit;color:#fff;font-weight:bold;font-size:20px;">{{round($data['product']->discount, 2)}}% Off</p>
                                                @endif
                                                <h1>
                                                    @if(null !==$data['product']->discount && is_numeric($data['product']->discount) && (int)$data['product']->discount !=0) 
                                                        <span class="c-price text-white font-weight-bold" title="${{null !==$data['product']->discount && is_numeric($data['product']->discount)?getDiscount($data['product']->price,$data['product']->discount):$data['product']->price}}"> <sup>$</sup><del style="font-size:18px;" title="{{$data['product']->price??0}}"> {{str_limit($data['product']->price,6)??0}} </del> {{null !==$data['product']->discount && is_numeric($data['product']->discount)?getDiscount($data['product']->price,$data['product']->discount):$data['product']->price}} </span>
                                                    @else
                                                        <span class="c-price text-white" title="${{$data['product']->price??0}}"> <sup>$</sup> {{str_limit($data['product']->price,6)??0}}</span>
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>    
                                        <img class="w-100" src="{{Storage::url($val->id.'/conversions/crop.png')}}" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                                    </div>
                                @endforeach
                            @else
                                <div class="prev-slide">
                                    <div class="row position-absolute w-100 no-gutters">
                                            <div class="col-3 text-center">
                                                 <div class="hot text-white bg-danger p-2 font-weight-bold rounded-0" style="z-index:9;max-width:100px;font-size:25px;">
                                                    HOT
                                                </div>
                                            </div>
                                            <div class="col-9 text-right"> 
                                                @if(null !==$data['product']->discount && is_numeric($data['product']->discount) && (int)$data['product']->discount !=0) 
                                                    <p class="m-0 p-0" style="line-height:inherit;color:#fff;font-weight:bold;font-size:20px;">{{round($data['product']->discount, 2)}}% Off</p>
                                                @endif
                                                <h1>
                                                    @if(null !==$data['product']->discount && is_numeric($data['product']->discount) && (int)$data['product']->discount !=0) 
                                                        <span class="c-price text-white font-weight-bold" title="${{null !==$data['product']->discount && is_numeric($data['product']->discount)?getDiscount($data['product']->price,$data['product']->discount):$data['product']->price}}"> <sup>$</sup> <del style="font-size:18px;" title="{{$data['product']->price??0}}"> {{str_limit($data['product']->price,6)??0}} </del> {{null !==$data['product']->discount && is_numeric($data['product']->discount)?getDiscount($data['product']->price,$data['product']->discount):$data['product']->price}}</span>
                                                    @else
                                                        <span class="c-price text-white" title="${{$data['product']->price??0}}"> <sup>$</sup> {{str_limit($data['product']->price,6)??0}}</span>
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>    
                                    <img class="w-100" src="{{asset('imgs/default/conversions/crop.png')}}" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                                </div>
                            @endif 
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
                                @php  
                                    $socialLink = route('market.productdetail',$data['product']->slug); 
                                    $socials=Share::load($socialLink,$data['product']->name,'http://127.0.0.1:8000/storage/106/conversions/crop.png')->services('facebook', 'linkedin', 'twitter');
                                @endphp
                                <div class="social social--color--filled">
                                @include('c2c.page.share', ['sep'=>'&','url' => request()->fullUrl(),'title' =>$data['product']->name,'image' => 'http://127.0.0.1:8000/storage/106/conversions/crop.png'])

                                </div>
                                <!-- end /.social-->
                                @if (Route::has('login'))
                                    @auth  
                                        @if($data['allowUserRate']==='true')
                                            <div class="item_action v_middle"> 
                                                <a href="#" class="btn btn--md btn--round btn--white rating--btn not--rated" data-toggle="modal" data-target="#myModalRate">
                                                    <div class="row no-gutters">
                                                        <div class="col-4 d-flex content-justify-center align-items-center">Rate Now</div>
                                                        <div class="col-8 pl-3"><div class="d-flex content-justify-center align-items-center staronly rating product--rating text-warning"></div> </div>
                                                    </div> 
                                                </a>
                                                <!-- end /.rating_btn -->
                                            </div>
                                        @endif
                                    @endauth
                                @endif 
                            </div> 
                            @if (Route::has('login'))
                                @auth 
                                    @if(isset(Auth::user()->roles->pluck('name')[0])) 
                                        @if(Auth::user()->roles->pluck('name')[0]=='super-admin') 
                                        <div class="row p-2">
                                            <div class="col text-center">
                                                <a data-target="#myModalConfirmProduct" data-toggle="modal" href="#" title="Delete this product">
                                                    <button class="btn btn-sm btn-danger">Delete</button> 
                                                </a>
                                            </div>
                                        </div>
                                        @endif
                                    @endif
                                @endauth
                            @endif
                        </div><!-- end /.item__preview-thumb-->


                    </div><!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                                </li>
                                {{--
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                                </li>
                                --}}
                                <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Reviews
                                        <span>({{count($data['getUserRateOfProduct'])}})</span>
                                    </a>
                                </li>
                                {{--
                                <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">Support</a>
                                </li>
                                <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">item FAQ</a>
                                </li>
                                --}}
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                @foreach($data['product']->translations as $val)
                                    @if($val->locale==app()->getLocale())
                                        {!!$val->description!!}
                                    @endif
                                @endforeach
                                </div>
                            </div>
                            <!-- end /.tab-content -->
                            {{--
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
                            --}}
                            <!-- end /.product-comment -->

                            <div class="fade tab-pane product-tab" id="product-review">
                                <div class="thread thread_review"> 
                                    @include('c2c.page.userrate')
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

                        {{--<div class="sidebar-card card-pricing p-3">
                            <div class="price p-3 m-0">
                                <h1>
                                    <sup>$</sup>
                                    <span>{{$data['product']->price??0}}</span>
                                </h1>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>--}}
                        <!-- end /.sidebar--card -->
                        <div class="author-card sidebar-card "> 
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <a href="{{route('market.mystore',$data['product']->user->id)}}">
                                        @if(isset($avatar) && !empty($avatar))
                                            <img src="{{Storage::url($avatar)}}" alt="Presenting the broken author avatar :D" style="border-radius:50%;">
                                        @else
                                            <img src="{{ asset('images/author-avatar.jpg') }}" alt="Presenting the broken author avatar :D">
                                        @endif
                                    </a>
                                </div>
                                <div class="author">
                                    <h4>{{ucfirst($data['product']->user->name)}}</h4>
                                    <!-- <p>Signed Up: {{$data['product']->user->created_at}}</p> -->
                                </div><!-- end /.author -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li><a target="_blank" href="{{$data['product']->user->profile->facebook_link??'javascript:void(0)'}}"><span class="fa fa-facebook"></span></a></li>
                                        <li><a target="_blank" href="{{$data['product']->user->profile->twitter_link??'javascript:void(0)'}}"><span class="fa fa-twitter"></span></a></li>
                                        <li><a target="_blank" href="{{$data['product']->user->profile->instagram_link??'javascript:void(0)'}}"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- end /.social -->

                                <div class="author-btn">
                                    <a href="{{route('market.mystore',$data['product']->user->id)}}" class="btn btn--sm btn--round">@lang('frontlabel.viewprofile')</a>
                                    <a target="_blank" href="{{url('chat')}}" class="btn btn--sm btn--round" id="sendMessage" data-id="{{$data['product']->user->id}}">@lang('frontlabel.sentmessage')</a>
                                </div><!-- end /.author-btn -->
                            </div><!-- end /.author-infos -->


                        </div><!-- end /.author-card -->
                        <div class="sidebar-card card--metadata">
                            <div class="row">
                                <div class="col-4 text-center border-right">
                                    <div class="row">
                                        <div class="col-md-12 pb-3">
                                            <span class="lnr lnr-heart scolor"></span>
                                        </div>
                                        <div class="col-md-12">
                                            <span>35</span>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-4 text-center border-right">
                                    <div class="row">
                                        <div class="col-md-12 pb-3">
                                            <span class="lnr lnr-bubble mcolor3"></span>
                                        </div>
                                        <div class="col-md-12">
                                            <span>{{$data['getUserRateOfProduct']->count()??0}}</span>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-4 text-center">
                                    @php 
                                        if($data['totalAvg'] >=4){
                                            $totalAvg=3;
                                        }else if($data['totalAvg'] < 4 && $data['totalAvg'] >= 2 ){
                                            $totalAvg=2;
                                        }else if($data['totalAvg'] < 2 && $data['totalAvg'] >= 1 ){
                                            $totalAvg=1;
                                        }else{
                                            $totalAvg=2;
                                        }
                                    @endphp
                                    <div class="row">
                                        <div class="col-md-12 pb-3">
                                            <div class="raty" data-score="{{$totalAvg??2}}"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <span>{{number_format($data['totalAvg'], 2, '.', ',')}} ( {{$data['totalRate']}} )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           {{-- <ul class="data">
                                <li class="p-2">
                                    <p>
                                        <span class="lnr lnr-heart scolor"></span>@lang('frontlabel.favourites')</p>
                                    <span>240</span>
                                </li>
                                <li class="p-2">
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>@lang('frontlabel.comments')</p>
                                    <span>35</span>
                                </li>
                                <li class="p-2">
                                    <p>
                                        <span class="lnr lnr-eye mcolor4"></span>@lang('frontlabel.views')</p>
                                    <span>6,589</span>
                                </li> 
                            </ul>
                            --}}
                            {{--<div class="row p-2">
                                @php 
                                    if($data['totalAvg'] >=4){
                                        $totalAvg=3;
                                    }else if($data['totalAvg'] < 4 && $data['totalAvg'] >= 2 ){
                                        $totalAvg=2;
                                    }else if($data['totalAvg'] < 2 && $data['totalAvg'] >= 1 ){
                                        $totalAvg=1;
                                    }else{
                                        $totalAvg=2;
                                    }
                                @endphp
                                <div class="col-7 col-md-6"><div class="raty" data-score="{{$totalAvg??2}}"></div></div>
                                <div class="col-5 col-md-6  text-right"><b>{{number_format($data['totalAvg'], 2, '.', ',')}} ( {{$data['totalRate']}} Votes )</b></div>
                            </div>
                            --}}
                        </div>
                        <!-- end /.sidebar-card --> 
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
                <div class="col-md-12"> 
                    <div class="partners relationPro">
                        @foreach($data['relateProByUser'] as $val)
                            @php
                                $avatar=''; 
                                if(null !== $val->user->profile){
                                    $media = $val->user->profile->getMedia(); 
                                    foreach($media as $m){   
                                        if($val->user->profile->avatar == $m->id){
                                            $avatar=$m->id.'/'.$m->file_name;  
                                        }
                                    } 
                                } 
                                $img='';
                                $getMediaRelation=$val->getMedia();
                                $getFirstMedia = $val->getFirstMedia(); 
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
                                        <img src="{{$img}}" alt="Product Image">
                                        <div class="prod_btn">
                                            <a href="{{ route('market.productdetail',$val->slug) }}" class="transparent btn--sm btn--round">More Info</a>
                                            <!-- <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a> -->
                                        </div>
                                        <!-- end /.prod_btn -->
                                    </div>
                                    <!-- end /.product__thumbnail -->

                                    <div class="product-desc">
                                        <a href="#" class="product_title">
                                            <h4>{{str_limit($val->name,30)}}</h4>
                                        </a>
                                        <ul class="titlebtm">
                                            <li>
                                                @if(isset($avatar) && !empty($avatar))
                                                    <img class="auth-img" src="{{Storage::url($avatar)}}" alt="author image"> 
                                                @else
                                                    <img class="auth-img" src="{{asset('images/auth3.jpg')}}" alt="author image">
                                                @endif 
                                                <p>
                                                    <a href="#">{{ucfirst(str_limit($val->user->name,15))}}</a>
                                                </p>
                                            </li>
                                            <li class="out_of_class_name">
                                                <div class="row no-gutters">
                                                    <div class="col col-md-5">
                                                        <p>
                                                            <span class="flag-icon flag-icon-kh"></span>
                                                            <span>Cam</span>
                                                        </p>
                                                    </div>
                                                    <div class="col col-md-7 text-right">
                                                        <p> 
                                                            <span>Phnom penh</span>
                                                        </p>                                                                 
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>

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
                                                                <div class="rateproduct" data-rating="{{$val->averageRating}}">
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
                        
                    </div> 
                    @if(count($data['relateProByUser'])  > 5)
                        <div class="owl-nav">
                            <div class="owl-prev customPrevBtn"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="owl-next customNextBtn"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                        <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    @endif
                </div> 
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
@section('cusomescript')
<script type="text/javascript">

    ( function($) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 
        var xhr=null;
        $('div.rateenable').raty({
            starType: 'i',
            target : '#hint',
            targetType : 'score',
            targetKeep : true,
            targetFormat : '{score} : Rating'
        });
        // rateable image
        // $('div.rateenable').raty({
        //     starOff   :"{{asset('imgs/0.png')}}",
        //     iconRange: [            
        //         { range: 1, on: "{{asset('imgs/1.png')}}"},
        //         { range: 2, on: "{{asset('imgs/2.png')}}"},
        //         { range: 3, on: "{{asset('imgs/3.png')}}"},
        //         { range: 4, on: "{{asset('imgs/4.png')}}"},
        //         { range: 5, on: "{{asset('imgs/5.png')}}"}
        //     ]
        // });
        // stare with emoji
        // $('div.staronly').raty(
        //     { 
        //         starType: 'img',
        //         iconRange: [
        //             { range: 1, on: "{{asset('imgs/1.png')}}", off: "{{asset('imgs/1.png')}}" },
        //             { range: 2, on: "{{asset('imgs/2.png')}}", off: "{{asset('imgs/2.png')}}" },
        //             { range: 3, on: "{{asset('imgs/3.png')}}", off: "{{asset('imgs/3.png')}}" },
        //             { range: 4, on: "{{asset('imgs/4.png')}}", off: "{{asset('imgs/4.png')}}" },
        //             { range: 5, on: "{{asset('imgs/5.png')}}", off: "{{asset('imgs/5.png')}}"}
        //         ], 
        //         readOnly:true
        //     }
        // );
        $('div.staronly').raty(
            { 
                starType: 'i',  
                readOnly:true
            }
        );
        $('div.raty').raty(
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
                score:"{{$totalAvg}}"
            }
        );
        $('div.rateproduct').raty(
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
        $('div.userrateproduct').raty(
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
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    }); 
    $(document).on('click', '.pagination-area.pagination-area2 a', function (e) {
        getPosts($(this).attr('href').split('page=')[1]);
        e.preventDefault();
    }); 
    function getPosts(page) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) { 
            $('.thread.thread_review').empty().html(data);
            $('div.userrateproduct').raty(
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
            location.hash = page; 
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
    function rateProduct(mythis){
        var this_=mythis; 
        var rateNum=$('div.rateenable > input[name="score"]').val();
        var rateComment=$('#rating_field').val();
        var proId=$('#proId').val();
        xhr=$.ajax({
            url: "{{route('market.ratemarket')}}",
            type: 'POST',
            data:{id:proId,rate:rateNum,comments:rateComment},
            headers: {
                'X-CSRF-Token':CSRF_TOKEN,
            },
            success: function( msg ) {
                if(msg.status==200){
                    // console.log('ok');
                    // $('div.raty').raty('reload');
                    // $('div.raty').raty('set', { score: 5 }); 
                    $('form#rateMarket button.modal_close').click();
                    $('.single-product-desc .item_action.v_middle').remove();
                }
            },
            error: function( data ) {
                console.log(data);
            }
        });
    }
    $('form#rateMarket button[type="button"]').on('click',function(e){
        e.preventDefault();   
        if (e.type == "click") documentClick = true; 
        if (documentClick){
            if(xhr==null){
                rateProduct($(this))
            }else{
                xhr.abort();
                rateProduct($(this))
            }
        } 
    }); 
    $(document).on('click','#sendMessage',function(){
        $.ajax({
            url: "{{url('createsession')}}",
            type: 'GET', 
            data:{friend_id:$(this).data('id')},
            headers: {
                'X-CSRF-Token':CSRF_TOKEN,
            },
            success: function( response ) {  
                console.log(response.data);
                if(response.data.length > 0){
                    localStorage.setItem('activeUser',JSON.stringify(response.data[0]));
                    window.location.replace("{{url('chat')}}");
                }
            },
            error: function( data ) {
                console.log(data);
            }
        });
    });

} ) ( jQuery );
</script>
@stop 