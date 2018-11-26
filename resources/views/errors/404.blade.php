@extends('layouts.app-layout')
@section('content')

<!--================================
            START 404 AREA
    =================================-->
<section class="four_o_four_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <img src="{{ asset('images/404.png') }}" alt="404 page">
                <div class="not_found">
                    <h3>Oops! Page Not Found</h3>
                    <a href="{{ URL('/') }}" class="btn btn--round btn--default">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
        END 404 AREA
=================================-->
@stop