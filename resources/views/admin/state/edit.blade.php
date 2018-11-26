@extends('layouts.admin-layout')
@section('title', 'Edit State')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <header class="card-heading ">
                        <h2 class="card-title">Update State</h2>
                        <p></p>
                    </header>
                    <div class="card-body">
                        <form id="form-horizontal"
                              accept-charset="UTF-8"
                              method="POST"
                              action="{{ action('Admin\StateController@update', ['id' => $state->id]) }}"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input id="nameInput" type="text" name="name" value="{{$state->name}}" placeholder="Enter your name" data-rule-required="true" minlength="2"class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="countryInput" class="col-sm-2 control-label ">Country</label>
                                <div class="col-sm-10">
                                    <select id="country-id" name="country_id" class="form-control select" style="display: none;" aria-required="true">
                                        <option value="">-</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" @if($state->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{ action('Admin\StateController@index') }}" class="btn btn-green btn-flat">Cancel</a>
                                    <button type="submit" class="btn btn-green">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()