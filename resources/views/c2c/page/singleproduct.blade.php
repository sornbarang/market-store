@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

<!--================================
        START BREADCRUMB AREA
    =================================-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Wordpress</a>
                        </li>
                        <li class="active">
                            <a href="#">Corporate & Business</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Beborn - Multipurpose WordPress Landing Page</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END BREADCRUMB AREA
=================================-->

<!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                            <div class="prev-slide"><img src="{{asset('/')}}images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing."></div>
                        </div><!-- end /.item--preview-slider -->

                        <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb1.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb2.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb3.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb4.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb5.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb1.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb2.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb3.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb4.jpg" alt="This is the thumbnail of the item"></div>
                                    <div class="item-thumb"><img src="{{asset('/')}}images/thumb5.jpg" alt="This is the thumbnail of the item"></div>
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
                                <p>
                                    <img src="{{ asset('images/svg/share.svg') }}" alt="This is share svg">
                                    <span>Share this item</span>
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
                                        <li>
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
                                        </li>
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
                                    <h1>Landing Page Details</h1>
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                        mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                        justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent
                                        pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                                    <h2>Features With Image:</h2>
                                    <img src="{{ asset('images/prodesc.jpg') }}" alt="This is product description thumbnail">

                                    <h2>Features With HTML List Unordered:</h2>
                                    <ul>
                                        <li>Six different themes for product slider</li>
                                        <li>Featured products slider form selected categories.</li>
                                        <li>Product slider form specific categories of products. Include or exclude categories.</li>
                                        <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                    </ul>

                                    <h2>Features With HTML List Ordered:</h2>
                                    <ol>
                                        <li>Six different themes for product slider</li>
                                        <li>Featured products slider form selected categories.</li>
                                        <li>Product slider form specific categories of products. Include or exclude categories.</li>
                                        <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                    </ol>

                                    <h2>Features With HTML List Ordered:</h2>
                                    <iframe width="100" height="400" src="https://www.youtube.com/embed/w2zIUJrglR4" allowfullscreen></iframe>
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
                                    <span>1,200.00</span>
                                </h1>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->
                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-heart scolor"></span>Favorites</p>
                                    <span>240</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>Comments</p>
                                    <span>35</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-eye mcolor4"></span>Views</p>
                                    <span>6,589</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.sidebar-card -->

                        {{--<div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <ul class="infos">
                                <li><p class="data-label">Released</p><p class="info">16 June 2015</p></li>
                                <li><p class="data-label">Updated</p><p class="info">28 July 2016 </p></li>
                                <li><p class="data-label">Version</p><p class="info">1.2</p></li>
                                <li><p class="data-label">Category</p><p class="info">Corporate & Business</p></li>
                                <li><p class="data-label">Layout</p><p class="info">Responsive</p></li>
                                <li><p class="data-label">Retina Ready</p><p class="info">No</p></li>
                                <li><p class="data-label">Files Included</p><p class="info">Html, CSS, JavaScript</p></li>
                                <li><p class="data-label">Browser</p><p class="info">IE10, IE11, Firefox, Safari, Opera, Chrome5</p></li>
                                <li><p class="data-label">Bootstrap</p><p class="info">Bootstrap 4</p></li>
                                <li><p class="data-label">Tags</p><p class="info"><a href="#">business</a>, <a
                                        href="#">template</a>, <a href="#">onepage</a>, <a href="#">creative</a>, <a
                                        href="#">responsive</a>, <a href="#">corporate</a>, <a href="#">Bootstrap3</a>,
                                    <a href="#">html5</a></p></li>
                            </ul>
                        </div>--}}<!-- end /.aside -->

                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    <a href="{{url(app()->getLocale().'/c2c/temp/mystore')}}"><img src="{{asset('/')}}images/author-avatar.jpg" alt="Presenting the broken author avatar :D"></a>
                                </div>

                                <div class="author">
                                    <h4>AazzTech</h4>
                                    <p>Signed Up: 08 April 2016</p>
                                </div><!-- end /.author -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                    </ul>
                                </div><!-- end /.social -->

                                <div class="author-btn">
                                    <a href="#" class="btn btn--sm btn--round">View Profile</a>
                                    <a href="#" class="btn btn--sm btn--round">Send Message</a>
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
    <section class="more_product_area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>More Items <span class="highlighted">by Aazztech</span></h1>
                    </div>
                </div><!-- end /.col-md-12 -->

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{asset('/')}}images/p4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                            </div><!-- end /.prod_btn -->
                        </div><!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title"><h4>Mccarther Coffee Shop</h4></a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth3.jpg" alt="author image">
                                    <p><a href="#">AazzTech</a></p>
                                </li>
                                <li class="product_cat">
                                    <a href="#"><img src="{{asset('/')}}images/cathtm.png" alt="category image">Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet congue.</p>
                        </div><!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10</span>
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

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{asset('/')}}images/p2.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                            </div><!-- end /.prod_btn -->
                        </div><!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title"><h4>Mccarther Coffee Shop</h4></a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth2.jpg" alt="author image">
                                    <p><a href="#">AazzTech</a></p>
                                </li>
                                <li class="product_cat">
                                    <a href="#"><img src="{{asset('/')}}images/catword.png" alt="category image">wordpress</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet congue.</p>
                        </div><!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10</span>
                                {{--<p><span class="lnr lnr-heart"></span> 48</p>--}}
                            </div>

                           {{-- <div class="rating product--rating">
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

                <!-- start .col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{asset('/')}}images/p6.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                {{--<a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>--}}
                            </div><!-- end /.prod_btn -->
                        </div><!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title"><h4>The of the century</h4></a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                    <p><a href="#">AazzTech</a></p>
                                </li>
                                <li class="product_cat">
                                    <a href="#"><img src="{{asset('/')}}images/catph.png" alt="Category Image">PSD</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                the mattis, leo quam aliquet congue.</p>
                        </div><!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10</span>
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
                            </div>

                            <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>--}}
                        </div><!-- end /.product-purchase -->
                    </div><!-- end /.single-product -->
                </div><!-- end /.col-md-4 -->

                </div><!-- end /.container -->
            </div><!-- end /.container -->
    </section>
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('/')}}images/calltobg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                        <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop