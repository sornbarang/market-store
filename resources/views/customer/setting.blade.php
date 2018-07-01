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
                <form name="frmupdateprofile" id="frmupdateprofile" method="POST" action="{{route('market.customer.update',Auth::user()->id)}}" class="setting_form">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
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
                                                    <p>{{route('market.myprofile')}}<span> {{Auth::user()->name}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailad">@lang('authlabel.email') <sup>*</sup></label>
                                                    <input required type="email"title="Must be a globex.com email address"  name="email" value="{{Auth::user()->email}}" id="emailad" class="text_field" placeholder="@lang('authlabel.email')" value="contact@aazztech.com">
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
                                                    <option value="Phnom Penh">Phnom Penh</option>
                                                    <option value="Preah Sihanouk">Preah Sihanouk</option>
                                                    <option value="Kampong Cham">Kampong Cham</option>
                                                    <option value="Siem Reap">Siem Reap</option>
                                                    <option value="Battambang">Battambang</option>
                                                    <option value="Kandal">Kandal</option>
                                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                                    <option value="Kampong Speu">Kampong Speu</option>
                                                    <option value="Kampong Thom">Kampong Thom</option>
                                                    <option value="Kampot">Kampot</option>
                                                    <option value="Kep">Kep</option>
                                                    <option value="Koh Kong">Koh Kong</option>
                                                    <option value="Kratie">Kratie</option>
                                                    <option value="Mondulkiri">Mondulkiri</option>
                                                    <option value="Oddar Meanchey">Otdar Meanchey</option>
                                                    <option value="Pailin">Pailin</option>
                                                    <option value="Preah Vihear">Preah Vihear</option>
                                                    <option value="Prey Veng">Prey Veng</option>
                                                    <option value="Pursat">Pursat</option>
                                                    <option value="Ratanakiri">Ratanakiri</option>
                                                    <option value="Stung Treng">Stung Treng</option>
                                                    <option value="Svay Rieng">Svay Rieng</option>
                                                    <option value="Takeo">Takeo</option>
                                                    <option value="Tboung Khmum">Tboung Khmum</option>
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

                            {{--
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>@lang('profilesetting.bilinginfo')<span class="lnr lnr-chevron-down"></span></h4>
                                </a>

                                <div class="information__set toggle_module collapse" id="collapse1">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">@lang('profilesetting.firstname') <sup>*</sup></label>
                                                    <input type="text" id="first_name" class="text_field" placeholder="@lang('profilesetting.firstname')" value="Ron">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">@lang('profilesetting.lastname') <sup>*</sup></label>
                                                    <input type="text" id="last_name" class="text_field" placeholder="@lang('profilesetting.lastname')" value="Doe">
                                                </div>
                                            </div>
                                        </div><!-- end /.row -->

                                        <div class="form-group">
                                            <label for="email">@lang('profilesetting.company')<sup>*</sup></label>
                                            <input type="text" id="email" class="text_field" placeholder="@lang('profilesetting.company')" value="AazzTech">
                                        </div>

                                        <div class="form-group">
                                            <label for="email1">@lang('profilesetting.emailaddress') <sup>*</sup></label>
                                            <input type="text" id="email1" class="text_field" placeholder="@lang('profilesetting.emailaddress')" value="contact@aazztech.com">
                                        </div>

                                        <div class="form-group">
                                            <label for="country1">@lang('profilesetting.country') <sup>*</sup></label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="country" class="text_field">
                                                    <option value="">@lang('profilesetting.selectone')</option>
                                                    <option value="bangladesh">Bangladesh</option>
                                                    <option value="india">India</option>
                                                    <option value="uruguye">Uruguye</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="neverland">Neverland</option>
                                                    <option value="atlantis">Atlantis</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="address1">@lang('profilesetting.add1')</label>
                                            <input type="text" id="address1" class="text_field" placeholder="@lang('profilesetting.add1')">
                                        </div>

                                        <div class="form-group">
                                            <label for="address2">@lang('profilesetting.add2')</label>
                                            <input type="text" id="address2" class="text_field" placeholder="@lang('profilesetting.add2')">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">@lang('profilesetting.citystate')<sup>*</sup></label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="city" id="city" class="text_field">
                                                            <option value="">Select one</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="sydney">Sydney</option>
                                                            <option value="newyork">New York</option>
                                                            <option value="london">London</option>
                                                            <option value="mexico">New Mexico</option>
                                                        </select>
                                                        <span class="lnr lnr-chevron-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="zipcode">@lang('profilesetting.zipcode') <sup>*</sup></label>
                                                    <input type="text" id="zipcode" class="text_field" placeholder="@lang('profilesetting.zipcode')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end /.information__set -->
                            </div><!-- end /.information_module -->
                            --}}
                        </div><!-- end /.col-md-6 -->
                        
                        
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