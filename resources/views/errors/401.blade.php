@extends('layouts.app-layout')
@section('content')

    <!--================================
            START 403 AREA
    =================================-->
    <section class="four_o_four_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="not_found">
                        <h3>Unauthorized</h3>
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