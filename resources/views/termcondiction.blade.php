@extends('layouts.app-layout')
@section('content') 
<!--================================
        START BREADCRUMB AREA
    =================================-->
    @include('elements.customer-breadcrumb')
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AFFILIATE AREA
    =================================-->
    <section class="job_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="job_detail_module information">
                        <h3 class="job__title">@lang('termcondiction.termofservice')</h3>
                        <div class="job__content"> 
                        <strong>Welcome to TreeWB!</strong><br/>
                            <p> 
                                These terns govern your use of TreeWB and the product, service and website.
                            </p>
                        </div>
                    </div>

                    <div class="job_detail_module">

                        <h3 class="job__title">@lang('termcondiction.ourservice')</h3>
                        <div class="job__content"> 
                            <ul class="content_list">
                                <li>Our mission is to serve market service, provide online deal, customer to customer, company to customer and to bring people together, we help people to increase their economic activity and trading from one community to other. Our service will find you to connect your market to community.</li>
                                <li>We provide you the online trade experience from local to global b divide it into big platform are company deal and customer deal. In those 2-plate form, there are a lot of category determine by kind of product that relate (clothes, technology, electric... etc.). Only two is certain we don’t provide and you'll be ban after post are MEDICAL DEAL AND ILLEGAL DEAL (animal skin, drug... ) .</li>
                                <li>Company deal is a platform that offer to customer various choice of buying, easy to access, secure deal and information (SSL) and online payment.</li>
                                <li>Customer deal is a platform that offer customer or user to use it freely for posting their produce.</li>
                                <li>For our user who using customer deal, we empower them to have the same right is posting unlimited content. Your real information will be your key contact to customer or trade. We'll protect your data (your post) but not obligate.</li>
                                <li>When you choose any platform, you can search or check any produce easily (Buy/Sell). Our platform will be easy to access and easy to use, so if you open our website, it'll be easy for you to search or check online stall (Customer deal).</li>
                                <li>Feedback: we're happily to see your feedback and other suggestion about our service, but you should know that we may use them without any restriction or obligation to compensate you, and we are under no obligation to keep them confidential.</li>
                            </ul>
                        </div>

                        <h3 class="job__title">@lang('termcondiction.odpapc')</h3>
                        <div class="job__content">
                            <!-- <p>laoreet dolore magna aluam erat volutpaterat consectetuerni euism laoreet dolore magna aliquam
                                erat volutpaterat . Consectetuer elit, sed diam nonmy dolor sit amet consectetuer adipiscing
                                elit, sed diam nonmy ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonmy.</p> -->

                            <ul class="content_list">
                                <li>To provide these services, we must collect and use your personal data in order to help you advertise your produce, which you must agree to in order to use our product.</li>
                                <li>We also encourage you to review the privacy.</li> 
                            </ul>
                        </div>
                        <h3 class="job__title">@lang('termcondiction.ycttaoc')</h3>
                        <div class="job__content">
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Who can use TreeWB?</strong></p>

                            <ul class="content_list">
                                <li>Use the real name or your real shop's name that you use in everyday life.</li>
                                <li>Provide accurate information about yourself and your shop.</li> 
                                <li>Create only one account (your own) and use your it on your personal purpose.</li> 
                                <li>Not share your password, give access to your TreeWB account to other or transfer your account with to anyone else without (without our permission)</li> 
                                <li>We tried to make TreeWB broadly available to everyone, but you cannot use it if</li> 
                                <li style="list-style:none !important;">
                                    <ul style="padding-left:20px !important;">
                                        <li style="list-style-type:disc !important;">You are under 15 years old or minimum legal age in your country to use our produce.</li>
                                        <li style="list-style-type:disc !important;">We previously disabled your account for violation of our term and policies.</li>
                                    </ul>
                                </li> 
                            </ul>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>What you can share and do on TreeWB</strong></p>

                            <ul class="content_list">
                                <li>We want people to use TreeWB in order to shop new produce, communicate each other by customer to customer, company to customer and increase their selling target.</li>
                                <li>You may not use our products to do or share anything</li> 
                                <li style="list-style:none !important;">
                                    <ul style="padding-left:20px !important;">
                                        <li style="list-style-type:disc !important;">hat breaches these term, our community standard and other term and policies that apply to your use of TreeWB.</li>
                                        <li style="list-style-type:disc !important;">That's unlawful, misleading, discriminatory or fraudulent.</li>
                                        <li style="list-style-type:disc !important;">That infringes or breaches someone else right.</li>
                                    </ul>
                                </li>
                                <li>You may not upload viruses or malicious code or do anything that could disable, overburden, or impair the proper working or appearance of our Products.</li> 
                                <li>You may not access or collect data from our Products using automated means (without our prior permission) or attempt to access data you do not have permission to access.</li> 
                                <li>We can remove content you share in violation of these provisions and, if applicable, we may take action against your account, for the reasons described below. We may also disable your account if you repeatedly infringe other people's intellectual property rights.</li> 
                                <li>Every trading must perform in good faith by all parties.</li> 
                                <li style="list-style:none !important;">
                                    <ul style="padding-left:20px !important;">
                                        <li style="list-style-type:disc !important;">To help support our community, we encourage you to report content or conduct that you believe violates your rights (including intellectual property right) or our term and policies</li>
                                    </ul>
                                </li> 
                            </ul>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>We need certain permission from you to provide our services</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Permission to use your name, profile picture, and information about your actions with ads and sponsored content: we use this mechanism to advertise your produce for increase your selling, we'll inform you about our posting but we don’t ask your permission to do it</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Account Suspension or termination: If we determine that you have violated our terms or policies, we may take action against your account to protect our community and services, including by suspending access to your account or disabling it. We may also suspend or disable your account if you create risk or legal exposure for us or when we are permitted or required to do so by law. Where appropriate, we will notify you about your account the next time you try to access it. You can learn more about that you can do if your account has been disabled.</strong></p>
                        </div>
                        <h3 class="job__title">@lang('termcondiction.limitonlia')</h3>
                        <div class="job__content">
                            <p>We work hard to provide the best Products we can and to specify clear guidelines for everyone who uses them. Our Products, however, are provided "as is," and we make no guarantees that they always will be safe, secure, or error-free, or that they will function without disruptions, delays, or imperfections. To the extent permitted by law, we also DISCLAIM ALL WARRANTIES, WHETHER EXPRESS OR IMPLIED, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT. We do not control or direct what people and others do or say, and we are not responsible for their actions or conduct (whether online or offline) or any content they share (including offensive, inappropriate, obscene, unlawful, and other objectionable content).</p>
                        </div>
                        <h3 class="job__title">@lang('termcondiction.other')</h3>
                        <div class="job__content">
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>These Terms (formerly known as the Statement of Rights and Responsibilities) make up the entire agreement between you and TreeWB. regarding your use of our Products. They supersede any prior agreements</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Some of the Products we offer are also governed by supplemental terms. If you use any of those Products, supplemental terms will be made available and will become part of our agreement with you. </strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>You will not transfer any of your rights or obligations under these Terms to anyone else without our consent.</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>When you accept this term and privacy, we assume that you have read through everything inside this privacy and agree on it.</strong></p>
                        </div>
                        <h3 class="job__title">@lang('termcondiction.othertapmou')</h3>
                        <div class="job__content">
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Community standard: these guidelines outline our standards regarding the content that you post to TreeWB and your activity on TreeWB and other TreeWB produce</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Commercial term: these terms apply if you also access or use our product for any commercial or business purpose, including advertising, operating an app on our platform, using our measurement services or managing product to sell</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Advertising policies: these policies specify what type of ad content are allowed by partners who advertise across the TreeWB produce.</strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Self-Serve Ad-Term: these terms apply when you use self-serve advertising interfaces to create, submit or deliver advertising or other commercial or sponsored activity or content.</strong></p>
                        </div>
                        <h3 class="job__title">@lang('termcondiction.cookie')</h3>
                        <div class="job__content">
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Cookies are small pieces of text used to store information on web browsers. Cookies are used to store and receive identifiers and other information on computers, phones, and other devices. Other technologies, including data we store on your web browser or device, identifiers associated with your device, and other software, are used for similar purposes. In this policy, we refer to all of these technologies as “cookies.” </strong></p>
                            <p><span class="lnr lnr-chevron-right-circle"></span>&nbsp;<strong>Each Web site can send its own cookie to your browser if your browser's preferences allow it, but (to protect your privacy) your browser only permits a Web site to access the cookies it has already sent to you, not the cookies sent to you by other sites, But browsers are usually set to accept cookies</strong></p>
                            <div class="social social--color--filled">
                                <p>Share on :</p>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end /.job_detail_module -->
                </div>
                <!-- end /.col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@stop