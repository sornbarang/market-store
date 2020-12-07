@extends('layouts.admin-layout')
@section('content')
    @if(isset($view) && !empty($view))
        @if(isset($data))
            @includeIf($view, ['data' => $data])
        @else
            @includeIf($view)
        @endif
    @else
        @include('admin.elements.dashboard')
    @endif
@stop