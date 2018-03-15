@extends('layouts.layout')
@section('content')
<div class="container-fluid" style="margin:auto;text-align:center;">
    <figure class="figure" style="margin:0;">
        <img src="{{asset('/')}}imgs/logo.png" class="figure-img img-fluid rounded-circle" alt="A generic square placeholder image with rounded corners in a figure.">
    </figure>
    <br/> 
    <br/> 
    <h3 class="text-center">Choose</h3> 
    <br/>
    <button type="button" class="btn btn-outline-primary btn-lg">F To F</button>
    <button type="button" class="btn btn-outline-info btn-lg">C To C</button> 
</div>



@stop