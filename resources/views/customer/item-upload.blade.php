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
                            <div class="d-flex align-items-center">
                                <div class="mr-auto p-2">
                                    <div class="dashboard__title">
                                        <h3>@lang('profileitemupload.uploaditem')</h3> 
                                    </div>
                                </div>
                                <div class="p-2">
                                    @if ($errors->any())
                                        <div class="alert alert-danger mb-0">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
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
                                                {{ session('error') }}.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span class="lnr lnr-cross" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    @endif  
                                </div> 
                            {{--
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>@lang('profileitemupload.uploaditem')</h3> 
                                </div>
                            </div>
                            <div class="pull-right"> 
                            @if ($errors->any())
                                <div class="alert alert-danger mb-0">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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
                                        {{ session('error') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="lnr lnr-cross" aria-hidden="true"></span>
                                    </button>
                                </div>
                            @endif  
                            --}}
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <form method="post" action="{{route('market.myitemupload')}}" id="frmUploadFront" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <input value="{{ old('sumernotehidden') }}" type="hidden" name="sumernotehidden" id="trumbowyg-demoe-hidden">
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
                                        <label for="product_name">@lang('profileitemupload.productname') <span class="text-danger">*</span> <span>(Max 100 characters)</span></label>
                                        <input class="form-control" min="1" max="100" value="{{ old('name') }}" type="text" id="product_name" name="name" class="text_field" placeholder="@lang('profileitemupload.productname')" required>
                                        <div class="invalid-feedback">
                                            Please privide product name.
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger" style="margin:0 !important;padding:0;">
                                                <ul>
                                                    <li>{{ $errors->first('name') }}</li>
                                                </ul>
                                            </div> 
                                        @endif
                                    </div> 
                                    <div class="form-group no-margin">
                                        <p class="label">@lang('profileitemupload.productdes')</p>
                                        <div id="trumbowyg-demo">{!! old('sumernotehidden') !!}</div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exlicense">@lang('profileitemupload.price')</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input value="{{ old('price') }}" step="0.01" min="0" max="999999999" name="price" type="number" id="exlicense" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exlicense">@lang('profileitemupload.discount')</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">%</span>
                                                <input value="{{ old('discount') }}" min="1" max="100"  name="discount" type="number" id="exlicense" class="text_field" placeholder="0">
                                                <div class="invalid-feedback">
                                                    Please privice product name.
                                                </div>
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
                                                        <input name="photos[]" type='file' id="imageUpload"  />
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
                                                        <input name="photos[]" type='file' id="imageUpload{{$i}}"  />
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
                                        <p>Everything your post please follow the rule of required don't try to post every bad we are watching everytime if we are seeing your contents post not relation your bussiness we will ban your account or delete your contents immediately. <br>
                                            Thank u.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>@lang('profileitemupload.troubleupload')</h3>
                                </div>

                                <div class="card_content">
                                    <p>If have problem with your upload relate with product , please report to use about your problem by email or phone belove.</p>
                                    <ul>
                                        <li>Email: admin@mail.com</li>
                                        <li>Phone: xxxxxxx</li> 
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
    @section('cusomescript')
        <script> 
        (function() {
        'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        var errorElements = document.querySelectorAll(
                                "input.form-control:invalid,select.form-control:invalid,input.custom-control-input:invalid");
                            errorElements.forEach(function(element) {
                                element.parentNode.childNodes.forEach(function(node) {
                                    if (node.className == 'valid-feedback') {
                                        node.className = 'invalid-feedback';
                                    }
                                });
                            }); 
                            $('html, body').animate({
                                scrollTop: $('#product_name').focus().top
                            }, 500);
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
        })();
        </script>                       
    @endsection
@stop