@extends('layouts.layout')
@section('content')
<div class="container-fluid" style="margin:auto;text-align:center;">
    <figure class="figure" style="margin:0;">
        <img src="{{asset('/')}}imgs/logo.svg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
    </figure>
    <div class="d-flex justify-content-center bd-highlight mb-3"  style="margin-bottom:0 !important;">
    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm">F To F</button>
<button type="button" class="btn btn-secondary btn-sm">C To C</button>
    </div>
</div>
</div>



@stop