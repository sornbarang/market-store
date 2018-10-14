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
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        @include('elements.customer-menu') 
        <div class="dashboard_contents">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>@lang('profileitemupload.uploaditem')</h3> 
                                </div>
                            </div>
                            <div class="pull-right">
                            @if (session('success')) 
                                <div class="alert alert-success" role="alert" style="margin:0 !important;padding:0;">
                                    <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                    {{ session('success') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="lnr lnr-cross" aria-hidden="true"></span>
                                    </button>
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger" role="alert" style="margin:0 !important;padding:0;">
                                    <span class="alert_icon lnr lnr-warning"></span>
                                        {{ session('success') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="lnr lnr-cross" aria-hidden="true"></span>
                                    </button>
                                </div>
                            @endif  
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <form method="post" action="{{route('market.myitemupload')}}" id="frmUploadFront" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="sumernotehidden" id="trumbowyg-demoe-hidden">
                            <input type="hidden" name="lastchildid" id="lastchildid">
                            <div class="upload_modules"> 
                                <div class="modules__content">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12" style="margin-bottom:1px;"> 
                                                <label>@lang('profileitemupload.choosecat')</label>
                                            </div>
                                            @foreach($data['category'] as $cat)
                                            <div class="col-md-4 mb-2">
                                                <div data-id="{{$cat->translate(app()->getLocale())->categories_ads_id}}" class="statement_info_card">
                                                    <div class="info_wrap">
                                                        <span class="lnr lnr-tag icon mcolorbg1"></span>
                                                        <div class="info"> 
                                                            <span>{{$cat->translate(app()->getLocale())->name}}</span>
                                                        </div>
                                                    </div>
                                                    <!-- end /.info_wrap -->
                                                </div>
                                                <!-- end /.statement_info_card -->
                                            </div>
                                            <!-- end /.col-md-3 -->
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- start subcat -->
                                    <div class="form-group subcategory">
                                    </div>
                                    <!-- end sub cat -->
                                    <div class="form-group">
                                        <label for="product_name">@lang('profileitemupload.productname') <span>(Max 100 characters)</span></label>
                                        <input required type="text" id="product_name" name="name" class="text_field" placeholder="@lang('profileitemupload.productname')">
                                        @if ($errors->any())
                                            <div class="alert alert-danger" style="margin:0 !important;padding:0;">
                                                <ul>
                                                    <li>{{ $errors->getBag('default')->first('name') }}</li> 
                                                    {{--
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach --}}
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group no-margin">
                                        <p class="label">@lang('profileitemupload.productdes')</p>
                                        <div id="trumbowyg-demo"></div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exlicense">@lang('profileitemupload.price')</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input step="0.01" min="0" max="999999999" name="price" type="number" id="exlicense" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exlicense">@lang('profileitemupload.discount')</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">%</span>
                                                <input step="0.01" min="0" max="100" name="discount" type="number" id="exlicense" class="text_field" placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end /.modules__content -->
                            </div><!-- end /.upload_modules -->
                            <div class="upload_modules upload_modules_blog">
                                <div class="modules__title">
                                    <h3>@lang('profileitemupload.uploadfile') </h3> 
                                    <span>750 x 430 (width,height) is standard</span>
                                </div><!-- end /.module_title -->
                                <div class="row">
                                    @for($i=0;$i<4;$i++)
                                        @if($i==0)
                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input name="photos[]" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input name="photos[]" type='file' id="imageUpload{{$i}}" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload{{$i}}"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif 
                                    @endfor 
                                </div>
                            </div>
                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg">@lang('profileitemupload.save')</button>
                        </form>
                    </div><!-- end /.col-md-8 -->

                    <div class="col-md-4 col-sm-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>@lang('profileitemupload.quickuploadrule')</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>@lang('profileitemupload.imageupload')</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis interdum.</p>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>@lang('profileitemupload.troubleupload')</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div><!-- end /.sidebar-card --> 
                        </aside><!-- end /.sidebar -->
                    </div><!-- end /.col-md-4 -->
                </div><!-- end /.row -->
            </div><!-- end /.container -->
        </div><!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
    
@stop