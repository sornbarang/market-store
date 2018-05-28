@extends('layouts.admin-layout')
@section('content')

    <div class="content-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <header class="card-heading ">
                        <h2 class="card-title">Add Permission</h2>
                        <p></p>
                    </header>
                    @include('admin.partials.message')
                    <div class="card-body">
                        <form id="form-horizontal"
                              accept-charset="UTF-8"
                              method="POST"
                              action="{{ action('Admin\PermissionController@store') }}"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input id="nameInput" type="text" name="name" placeholder="Enter your name" data-rule-required="true" minlength="2" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Roles</label>
                                <div class="col-sm-10">
                                    @foreach($roles as $role)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="roles[]" value="{{$role->name}}" data-rule-required="false" aria-required="false"> {{$role->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{ action('Admin\PermissionController@index') }}" class="btn btn-green btn-flat">Cancel</a>
                                    <button type="submit" class="btn btn-green">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()