@extends('layouts.layout')
@section('content')
<div class="container-fluid" style="margin:auto;text-align:center;"> 
    <figure class="figure" style="margin:0;">
        <img src="{{asset('/')}}imgs/logo.png" class="figure-img img-fluid rounded-circle" alt="A generic square placeholder image with rounded corners in a figure.">
    </figure>
    <br/>  
    <br/>  
    <div class="d-flex justify-content-center">
        <div class="p-2"><button type="button" class="btn btn-lg btncus" title="Face To Face">F To F</button></div>
        <div class="p-2"><button type="button" class="btn btn-lg btncus" title="Customer To Customer">C To C</button> </div>
    </div>
</div> 
@stop