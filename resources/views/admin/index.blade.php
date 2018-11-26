@extends('layouts.admin-layout')
@section('content')
    @if(isset($view) && !empty($view))
        @if(isset($data))
            {!! View($view)->with('data',$data) !!}
        @else
        {!! View($view) !!}
        @endif
    @else
        @include('admin.elements.dashboard')
    @endif
@stop