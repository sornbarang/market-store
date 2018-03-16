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
    <button type="button" class="btn btn-outline-primary btn-lg" title="Face To Face">F To F</button>
    <a href="{{url('c2c')}}"><button type="button" class="btn btn-outline-info btn-lg" title="Customer To Customer">C To C</button></a>
</div>



@stop