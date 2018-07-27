@extends('layouts.app-layout')
@section('content') 
<!-- Modal 2 -->
<div class="modal fade rating_modal item_remove_modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Are you sure to delete this item?</h3>
                <p>You will not be able to recover this file!</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- end /.modal-header -->
            <form id="frmdeleteproduct" method="post">
                @method('DELETE')
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
    <section class="dashboard-area dashboard-edit">
        @include('elements.customer-menu')

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar dashboard_title_area clearfix filter-bar2">

                            <div class="dashboard__title dashboard__title pull-left">
                                <h3>@lang('profilemanageitem.manageitem')</h3>
                            </div>
                            &nbsp;
                            <div class="filter__option filter--text">
                                @if (session('success')) 
                                    <div class="alert alert-success" role="alert" style="margin:0 !important;padding:10px;">
                                        <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                        {{ session('success') }}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger" role="alert" style="margin:0 !important;padding:10px;">
                                        <span class="alert_icon lnr lnr-warning"></span>
                                            {{ session('success') }}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @endif   
                            </div>
                            <div class="pull-right">
                                
                                <div class="filter__option filter--text">
                                    <p><span>{{count($data['products'])}}</span> @lang('profilemanageitem.product')</p>
                                </div>

                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <!-- Request::url() get current url --> 
                                        <form action="{{ Request::url() }}" method="get"> 
                                            <select name="price"> 
                                                <option value="low" {{$data['order']=='asc'?'selected':''}}>@lang('profilefavorite.lowtohight')</option>
                                                <option value="high" {{$data['order']=='desc'?'selected':''}}>@lang('profilefavorite.highttolow')</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </form> 
                                    </div>
                                </div>
                            </div><!-- end /.pull-right -->
                        </div><!-- end /.filter-bar -->
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row"> 
                    @foreach($data['products'] as $val) 
                        @php
                            $avatar='';
                            $media = $val->user->profile->getMedia(); 
                            foreach($media as $m){   
                                if($val->user->profile->avatar == $m->id){
                                    $avatar= Storage::url($m->id.'/'.$m->file_name);
                                }
                            } 
                            $img=''; 
                            $getFirstMedia = $val->getFirstMedia(); 
                            if($getFirstMedia){
                                $img = Storage::url($getFirstMedia->id.'/conversions/'.$getFirstMedia->file_name);
                            }
                        @endphp
                        <div class="col-md-4 col-sm-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail"> 
                                    <figure class="figure">
                                        <img  src="{{$img}}" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                                    </figure>
                                    <div class="prod_option">
                                        <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="lnr lnr-cog setting-icon"></span>
                                        </a>

                                        <div class="options dropdown-menu" aria-labelledby="drop2">
                                            <ul>
                                                <li><a href="{{route('market.edititem',$val->id)}}"><span class="lnr lnr-pencil"></span>@lang('profilemanageitem.edit')</a></li>
                                                {{--<li><a href="#"><span class="lnr lnr-eye"></span>@lang('profilemanageitem.hide')</a></li>--}}
                                                <li>
                                                    <a data-route="{{route('market.deleteproduct',$val->id)}}" href="#" data-toggle="modal" data-target="#myModal2" class="delete" id="deletepro">
                                                        <span class="lnr lnr-trash"></span>@lang('profilemanageitem.delete')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title"><h4>{{$val->translateOrNew(app()->getLocale())->name}}</h4></a>
                                    <ul class="titlebtm">
                                        <li>
                                            @if(isset($avatar) && !empty($avatar))
                                                <img class="auth-img" src="{{$avatar}}" alt="author image">
                                            @else
                                                <img class="auth-img" src="{{asset('/')}}images/auth.jpg" alt="author image">
                                            @endif
                                            <p><a href="{{route('market.myprofile')}}">
                                            @if (Route::has('login'))
                                                @auth
                                                    {{ ucfirst(Auth::user()->name) }}
                                                @else
                                                    guest
                                                @endauth 
                                            @endif
                                            </a></p>
                                        </li> 
                                    </ul> 
                                    {!!$val->translateOrNew(app()->getLocale())->description!!}
                                </div><!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="row">
                                        <div class="col text-md-left text-xs-center text-sm-center  col-xs-12 col-sm-12 col-md-6">
                                            <div class="price_love">
                                                <span>$ {{$val->price??0}}</span> 
                                            </div>
                                        </div>
                                        <div class="cflexcenter col text-xs-center  col-xs-12 col-sm-12 col-md-6">
                                        <div class="sell">
                                            <a href="javascript:void(0)">
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-half-o"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- end /.product-purchase -->
                            </div><!-- end /.single-product -->
                        </div><!-- end /.col-md-4 -->
                    @endforeach 
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-area">
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">
                                    {{$data['products']->links()}}
                                </div>
                            </nav>
                        </div><!-- end /.pagination-area -->
                    </div><!-- end /.col-md-12 -->
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