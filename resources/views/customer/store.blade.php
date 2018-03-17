@extends('layouts.app-layout')
@section('content') 
<!--================================
        START SEARCH AREA
    =================================-->
<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('/')}}images/search.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="search">
                        <div class="search__title"><h3><span>35,270</span> website templates from our creative community</h3></div>
                        <div class="search__field">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Search your products">
                                    <button class="btn btn--round" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="#">AazzTech</a></li>
                                <li class="active"><a href="#">Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </div><!-- end /.search-area2 -->
</section>
<!--================================
    END SEARCH AREA
=================================-->

<!--================================
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="{{asset('/')}}images/author-avatar.jpg" alt="Presenting the broken author avatar :D">
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
                                    <a href="#" class="btn btn--md btn--round">Follow</a>
                                </div><!-- end /.author-btn -->
                            </div><!-- end /.author-infos -->
                        </div><!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li><a href="author.html">Profile</a></li>
                                <li><a class="active" href="author-items.html">Author Items</a></li>
                                <li><a href="author-reviews.html">Customer Reviews</a></li>
                                <li><a href="author-followers.html">Followers (67)</a></li>
                                <li><a href="author-following.html">Following (39)</a></li>
                            </ul>
                        </div><!-- end /.author-menu -->

                        <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1"><span class="circle"></span>Available for Freelance work</label>
                            </div>
                        </div><!-- end /.author-card -->

                        <div class="sidebar-card message-card">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <div class="message-form">
                                <form action="#">
                                    <div class="form-group">
                                        <textarea name="message" class="text_field" id="author-message" placeholder="Your message..."></textarea>
                                    </div>

                                    <div class="msg_submit">
                                        <button type="submit" class="btn btn--md btn--round">send message</button>
                                    </div>
                                </form>
                               <p> Please <a href="#">sign in</a> to contact this author.</p>
                            </div><!-- end /.message-form -->
                        </div><!-- end /.freelance-status -->
                    </aside>
                </div><!-- end /.sidebar -->

                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Items</p>
                                <h3>4,369</h3>
                            </div>
                        </div><!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Total sales</p>
                                <h3>36,957</h3>
                            </div>
                        </div><!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Total Items</p>
                                <div class="rating">
                                    <ul>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star-half-o"></span></li>
                                    </ul>
                                    <span class="rating__count">(26)</span>
                                </div>
                            </div>
                        </div><!-- end /.col-md-4 -->
                    </div><!-- end /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-bar clearfix filter-bar2">
                                <div class="filter__option filter--text pull-left">
                                    <p><span>4,369</span> Author Items</p>
                                </div> 
                            </div><!-- end filter-bar -->
                        </div><!-- end /.col-md-12 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p4.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                    </div><!-- end /.prod_btn -->
                                </div><!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title"><h4>Yannan Na nakka muka</h4></a>
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
                                        <p><span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star-half-o"></span></li>
                                        </ul>
                                    </div>

                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p2.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
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
                                        <p><span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star-half-o"></span></li>
                                        </ul>
                                    </div>

                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p2.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
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
                                        <p><span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star-half-o"></span></li>
                                        </ul>
                                    </div>

                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p6.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                    </div><!-- end /.prod_btn -->
                                </div><!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title"><h4>The of the century</h4></a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                            <p><a href="#">Tonystank</a></p>
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
                                        <p><span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star-half-o"></span></li>
                                        </ul>
                                    </div>

                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="{{asset('/')}}images/p7.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                    </div><!-- end /.prod_btn -->
                                </div><!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title"><h4>Rida-vCard theme</h4></a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('/')}}images/auth2.jpg" alt="author image">
                                            <p><a href="#">ArkhamThemes</a></p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#"><span class="lnr lnr-book"></span>Plugin</a>
                                        </li>
                                    </ul>

                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                        the mattis, leo quam aliquet congue.</p>
                                </div><!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$10</span>
                                        <p><span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star-half-o"></span></li>
                                        </ul>
                                    </div>

                                    <div class="sell"><p><span class="lnr lnr-cart"></span><span>50</span></p></div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                                <!-- start .single-product -->
                                <div class="product product--card">

                                    <div class="product__thumbnail">
                                        <img src="{{asset('/')}}images/p8.jpg" alt="Product Image">
                                        <div class="prod_btn">
                                            <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                            <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                        </div><!-- end /.prod_btn -->
                                    </div><!-- end /.product__thumbnail -->

                                    <div class="product-desc">
                                        <a href="#" class="product_title"><h4>E-commerce Shopping Cart</h4></a>
                                        <ul class="titlebtm">
                                            <li>
                                                <img class="auth-img" src="{{asset('/')}}images/auth3.jpg" alt="author image">
                                                <p><a href="#">JkrThemes</a></p>
                                            </li>
                                            <li class="product_cat">
                                                <a href="#"><span class="lnr lnr-book"></span>Plugin</a>
                                            </li>
                                        </ul>

                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                            the mattis, leo quam aliquet congue.</p>
                                    </div><!-- end /.product-desc -->

                                    <div class="product-purchase">
                                        <div class="price_love">
                                            <span>Free</span>
                                            <p><span class="lnr lnr-heart"></span> 24</p>
                                        </div>

                                        <div class="rating product--rating">
                                            <ul>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star-half-o"></span></li>
                                            </ul>
                                        </div>

                                        <div class="sell"><p><span class="lnr lnr-cart"></span><span>27</span></p></div>
                                    </div><!-- end /.product-purchase -->
                                </div><!-- end /.single-product -->
                            </div><!-- end /.col-md-6 -->
                    </div><!-- end /.row -->

                    <div class="pagination-area pagination--right">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#"><span class="lnr lnr-arrow-left"></span></a>
                                <a class="page-numbers current" href="#/">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </nav>
                    </div>
                </div><!-- end /.col-md-8 -->

            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->


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