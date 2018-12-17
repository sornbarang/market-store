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
    @php  
    $r='market.';
    @endphp 
    @if(isset($data['type']) && $data['type']=='shop')
        @php 
            $r='shop.';
        @endphp
    @endif
    <section class="dashboard-area">
        @include('elements.customer-menu')

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area mb-3">
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
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                    
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <form method="post" action="{{route($r.'edititem',$data['product']->slug)}}" id="frmUpdateFront" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="sumernotehidden" id="trumbowyg-demoe-hidden">
                            <input type="hidden" name="lastchildid" id="lastchildid">
                            <input type="hidden" name="clid" id="clid" value="{{$data['clid']}}">
                            @if(isset($data['category']) && !empty($data['category'] ))
                                <div class="upload_modules">  
                                    <div class="modules__content">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12" style="margin-bottom:1px;"> 
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>@lang('profileitemupload.choosecat')</label>
                                                        </div>
                                                        <div class="col-md-8 text-center">
                                                            <label>{{count($data['currentcat']) > 0?implode(' > ',$data['currentcat']):'no category'}}</label>
                                                        </div>
                                                    </div>
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
                                            <input min="1" max="100" value="{{$data['product']->name}}" required type="text" id="product_name" name="name" class="form-control text_field" placeholder="@lang('profileitemupload.productname')">
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
                                            <div id="trumbowyg-demo">
                                                {!!$data['product']->translations[0]->description!!}
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="exlicense">@lang('profileitemupload.price')</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input step="0.01" min="0" max="999999999" value="{{$data['product']->price}}" name="price" type="number" id="exlicense" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="exlicense">@lang('profileitemupload.discount')</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input value="{{$data['product']->discount}}" min="0" max="100" name="discount" type="number" id="exlicense" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end /.modules__content -->
                                </div><!-- end /.upload_modules -->
                            @endif
                            <div class="upload_modules upload_modules_blog">
                            <div class="modules__title">
                                @php
                                    $img=''; 
                                    $newsItem=App\Models\ProductsAds::find($data['product']->id);
                                    $mediaItems = $newsItem->getMedia(); 
                                    $img=isset($mediaItems[0])?$mediaItems[0]->id.'/'.$mediaItems[0]->file_name:''; 
                                    $img1=isset($mediaItems[1])?$mediaItems[1]->id.'/'.$mediaItems[1]->file_name:''; 
                                    $img2=isset($mediaItems[2])?$mediaItems[2]->id.'/'.$mediaItems[2]->file_name:''; 
                                    $img3=isset($mediaItems[3])?$mediaItems[3]->id.'/'.$mediaItems[3]->file_name:''; 
                                @endphp
                                    <h3>@lang('profileitemupload.uploadfile')</h3>
                                </div><!-- end /.module_title -->
                                <div class="row"> 
                                    <div class="col-md-4">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="photos" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                @if($img)
                                                    <div class="imagePreview" style="background-image: url('{{Storage::url($img)}}')">
                                                    </div>
                                                    <input name="mediaid" type="hidden" value="{{$mediaItems[0]->id}}">
                                                @else
                                                    <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="photos1" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                
                                                @if($img1)
                                                    <div class="imagePreview" style="background-image: url('{{Storage::url($img1)}}');">
                                                    </div>
                                                    <input name="mediaid1" type="hidden" value="{{$mediaItems[1]->id}}">
                                                @else
                                                    <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="photos2" type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload2"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                
                                                @if($img2)
                                                    <div class="imagePreview" style="background-image: url('{{Storage::url($img2)}}');">
                                                    </div>
                                                    <input name="mediaid2" type="hidden" value="{{$mediaItems[2]->id}}">
                                                @else
                                                    <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="photos3" type='file' id="imageUpload3" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload3"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                
                                                @if($img3)
                                                    <div class="imagePreview" style="background-image: url('{{Storage::url($img3)}}');"></div>
                                                    <input name="mediaid3" type="hidden" value="{{$mediaItems[3]->id}}">
                                                @else
                                                    <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div><!-- end /.upload_modules -->

                            {{--<div class="upload_modules">
                                <div class="modules__title">
                                    <h3>@lang('profileedititemupload.otherinfo')</h3>
                                </div><!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="selected">Files Included</label>
                                                    <select name="country" id="selected" multiple class="text_field">
                                                        <option value="php">php</option>
                                                        <option value="html">Html</option>
                                                        <option value="psd">psd</option>
                                                        <option value="js">javascript</option>
                                                        <option value="coffee">coffeescript</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                            </div><!-- end /.form-group -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="browsers">Compatible Browsers</label>
                                                    <select name="country" id="browsers" multiple class="text_field">
                                                        <option value="ie8">IE8</option>
                                                        <option value="ie9">IE9</option>
                                                        <option value="chrome">Chrome</option>
                                                        <option value="firefox">firefox</option>
                                                        <option value="safari">safari</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                            </div><!-- end /.form-group -->
                                        </div><!-- end /.col-md-6 -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="columns">Columns</label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="country" id="columns" class="text_field">
                                                        <option value="">Choose Columns</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4+</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dimension">Item Dimensions</label>
                                                <input type="text" id="dimension" class="text_field" placeholder="Ex: 1920x6000.">
                                            </div>
                                        </div><!-- end /.col-md-6 -->
                                    </div><!-- end /.row -->
                                    

                                    <div class="form-group">
                                        <label for="soft">Minimum Software Version</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="version" id="soft" class="text_field">
                                                <option value="">Choose version</option>
                                                <option value="4">WordPress 4</option>
                                                <option value="4.1">WordPress 4.1.*</option>
                                                <option value="4.2">WordPress 4.2.*</option>
                                                <option value="4.3">WordPress 4.3.*</option>
                                                <option value="4.4">WordPress 4.4.*</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group radio-group">
                                                <p class="label">High Resolution</p>
                                                <div class="custom-radio">
                                                    <input type="radio" id="yes" class="" name="high_res">
                                                    <label for="yes"><span class="circle"></span>Yes</label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" id="no" class="" name="high_res">
                                                    <label for="no"><span class="circle"></span>no</label>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group radio-group">
                                                <p class="label">Retina Ready</p>
                                                <div class="custom-radio">
                                                    <input type="radio" id="ryes" class="" name="retina">
                                                    <label for="ryes"><span class="circle"></span>Yes</label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" id="rno" class="" name="retina">
                                                    <label for="rno"><span class="circle"></span>no</label>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->
                                    </div><!-- end /.row -->

                                    <div class="form-group">
                                        <label for="tags">Item Tags <span>(Max 10 tags)</span></label>
                                        <textarea name="tags" id="tags" class="text_field" placeholder="Enter your item tags here..."></textarea>
                                    </div>
                                </div><!-- end /.upload_modules -->
                            </div><!-- end /.upload_modules -->
                            --}}
                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg">@lang('profileedititemupload.save')</button>
                        </form>
                    </div><!-- end /.col-md-8 -->

                    <div class="col-md-4 col-sm-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>@lang('profileedititemupload.quickuploadrule')</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>@lang('profileedititemupload.imageupload')</h4>
                                        <p>
                                            Everything your post please follow the rule of required don't try to post every bad we are watching everytime if we are seeing your contents post not relation your bussiness we will ban your account or delete your contents immediately. <br>
                                            Thank u.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>@lang('profileedititemupload.troubleupload')</h3>
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