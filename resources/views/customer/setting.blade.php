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
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>@lang('profilesetting.as')</h3>
                                @if ($errors->any())
                                <div class="alert alert-danger" style="margin:0 !important;padding:0;">
                                    <ul>
                                        {{--<li>{{ $errors->getBag('default')->first('name') }}</li> --}}
                                        
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
                <form name="frmupdateprofile" id="frmupdateprofile" method="POST" action="{{route('market.customer.update',Auth::user()->id)}}" class="setting_form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>@lang('profilesetting.ps') <span class="lnr lnr-chevron-down"></span></h4>
                                </a>
                                <div class="information__set toggle_module collapse in" id="collapse2">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="acname">@lang('profilesetting.name')</label>
                                                    <input name="acname" value="{{Auth::user()->name}}" type="text" id="acname" class="text_field" placeholder="@lang('profilesetting.name')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="usrname">@lang('profilesetting.username') <sup>*</sup></label>
                                                    <input name="name" value="{{Auth::user()->name}}" type="text" id="usrname" class="text_field" placeholder="@lang('profilesetting.username')" required>
                                                    <p style="word-break:break-all;">{{route('market.myprofile')}}<span> {{ucfirst(Auth::user()->name)}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailad">@lang('authlabel.email') <sup>*</sup></label>
                                                    <input required type="email" title="Must be a globex.com email address"  name="email" value="{{Auth::user()->email}}" id="emailad" class="text_field" placeholder="@lang('authlabel.email')" value="contact@aazztech.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website">@lang('profilesetting.website')</label>
                                                    <input name="website" type="text" id="website" class="text_field" placeholder="@lang('profilesetting.website')" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">@lang('profilesetting.password') <sup>*</sup></label>
                                                    <input name="password" type="password" id="password" class="text_field" placeholder="@lang('profilesetting.password')" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="conpassword">@lang('profilesetting.conpass') <sup>*</sup></label>
                                                    <input type="password" id="conpassword" class="text_field" placeholder="@lang('profilesetting.conpass')" >
                                                    <div id="notmatch"><p>Your password not match</p></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">@lang('profilesetting.phone')</label>
                                                    <input value="{{Auth::user()->profile->phone}}" name="phone" type="text" id="phone" class="text_field" placeholder="@lang('profilesetting.phone')" >
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location">@lang('profilesetting.country')</label>
                                                    <div class="select-wrap select-wrap2">
                                                    <select id="location" data-placeholder="Select a City/Province" name="location">
                                                    <option value="">Select a City/Province</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='phnom penh'?'selected':''}} value="Phnom Penh">Phnom Penh</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='preah sihanouk'?'selected':''}} value="Preah Sihanouk">Preah Sihanouk</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='preah sihanouk'?'selected':''}} value="Kampong Cham">Kampong Cham</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='siem reap'?'selected':''}} value="Siem Reap">Siem Reap</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='battambang'?'selected':''}} value="Battambang">Battambang</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kandal'?'selected':''}} value="Kandal">Kandal</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='banteay meanchey'?'selected':''}} value="Banteay Meanchey">Banteay Meanchey</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kampong chhnang'?'selected':''}} value="Kampong Chhnang">Kampong Chhnang</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kampong speu'?'selected':''}} value="Kampong Speu">Kampong Speu</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kampong thom'?'selected':''}} value="Kampong Thom">Kampong Thom</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kampot'?'selected':''}} value="Kampot">Kampot</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kep'?'selected':''}} value="Kep">Kep</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='koh kong'?'selected':''}} value="Koh Kong">Koh Kong</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='kratie'?'selected':''}} value="Kratie">Kratie</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='mondulkiri'?'selected':''}} value="Mondulkiri">Mondulkiri</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='oddar meanchey'?'selected':''}} value="Oddar Meanchey">Otdar Meanchey</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='pailin'?'selected':''}} value="Pailin">Pailin</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='preah vihear'?'selected':''}} value="Preah Vihear">Preah Vihear</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='prey veng'?'selected':''}} value="Prey Veng">Prey Veng</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='pursat'?'selected':''}} value="Pursat">Pursat</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='ratanakiri'?'selected':''}} value="Ratanakiri">Ratanakiri</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='stung treng'?'selected':''}} value="Stung Treng">Stung Treng</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='svay rieng'?'selected':''}} value="Svay Rieng">Svay Rieng</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='takeo'?'selected':''}} value="Takeo">Takeo</option>
                                                    <option {{trim(strtolower(Auth::user()->profile->location))=='tboung khmum'?'selected':''}} value="Tboung Khmum">Tboung Khmum</option>
                                                    </select>
                                                        <span class="lnr lnr-chevron-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        <div class="form-group">
                                            <label for="authbio">@lang('profilesetting.authbio')</label>
                                            <textarea name="author_bio" id="authbio" class="text_field" placeholder="Short brief about yourself or your account...">{{Auth::user()->profile->bio}}</textarea>
                                        </div>
                                    </div><!-- end /.information_wrapper -->
                                </div><!-- end /.information__set -->
                            </div><!-- end /.information_module --> 
                        </div><!-- end /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Profile Image & Cover
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                    <div class="information_wrapper">
                                        <div class="profile_image_area"> 
                                            <div class="img_info">
                                                <p class="bold">Profile Image</p>
                                                <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                            </div>
                                            @php
                                                $avatar=''; 
                                                $cover=''; 
                                                $media = Auth::user()->profile->getMedia(); 
                                                foreach($media as $val){  
                                                    if(Auth::user()->profile->avatar==$val->id){
                                                        $avatar=$val->id.'/'.$val->file_name; 
                                                        $mediaavatarid=$val->id??''; 
                                                    }
                                                    if(Auth::user()->profile->cover_image==$val->id){
                                                        $cover=$val->id.'/'.$val->file_name; 
                                                        $mediacoverid=$val->id??''; 
                                                    }
                                                }   
                                            @endphp
                                            <div class="col-md-12">
                                                <div class="avatar-upload" style="margin:0 auto;">
                                                    <div class="avatar-edit">
                                                        <input name="profile" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview"> 
                                                        @if(isset($avatar) && !empty($avatar))
                                                            <div class="imagePreview" style="background-image: url('{{Storage::url($avatar)}}');"></div>
                                                            <input name="mediaavatarid" type="hidden" value="{{$mediaavatarid}}">
                                                        @else
                                                            <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="prof_img_upload">
                                            <p class="bold">Cover Image</p>
                                            <div class="col-md-12">
                                                <div class="avatar-upload" style="margin:0 auto; max-width:100%;">
                                                    <div class="avatar-edit">
                                                        <input name="cover" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload1"></label>
                                                    </div>
                                                    <div class="avatar-preview" style="width:100%;height:360px;border-radius:inherit;">
                                                    @if(isset($cover) && !empty($cover)) 
                                                        <div  title="Choose image" class="imagePreview" style="background-image: url('{{Storage::url($cover)}}');border-radius: inherit;">
                                                        </div> 
                                                        <input name="mediacoverid" type="hidden" value="{{$mediacoverid}}">
                                                    @else
                                                        <div alt="No image" title="Choose image" class="imagePreview" style="background-image: url('{{asset('imgs/no_image.png')}}');"></div>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="upload_title">
                                                <p>JPG, GIF or PNG 750x370 px</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information_module --> 
                        </div>
                        <!-- end /.col-md-6 -->
                        
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">@lang('profilesetting.savechange')</button>
                            </div>
                        </div><!-- end /.col-md-12 -->
                    </div><!-- end /.row -->
                </form><!-- end /form --> 
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