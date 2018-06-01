@extends('layouts.layout')
@section('content')
<div class="container-fluid" style="margin:auto;text-align:center;"> 
    <figure class="figure" style="margin:0;">
        <img   width="400" height="400"  src="{{asset('/imgs/logo.png')}}" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
    </figure>
    <br/>  
    <br/>  
    <div class="d-flex justify-content-center">
        <div class="p-2 ftof"><button type="button" class="btn btn-light btncus" title="Face To Face">Go Shopping</button></div>
        <a href="{{ route('market') }}"><div class="p-2 ctoc"><button type="button" class="btn btn-light btncus" title="Customer To Customer">Go Market</button> </div></a>
    </div>
</div> 
@stop