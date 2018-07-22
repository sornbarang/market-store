@extends('layouts.admin-layout')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <header class="card-heading ">
                        <h2 class="card-title">Update User</h2>
                        <p></p>
                    </header>
                    @include ('admin.errors.list')
                    <div class="card-body">
                        <form id="form-horizontal"
                              accept-charset="UTF-8"
                              method="POST"
                              action="{{ action('Admin\UserController@update', ['id' => $user->id]) }}"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input id="nameInput" type="text" name="name" placeholder="Enter your name" data-rule-required="true" minlength="2"class="form-control" aria-required="true" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstnameInput" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input id="firstnameInput" type="text" name="first_name" placeholder="First Name" data-rule-required="true" minlength="2"class="form-control" aria-required="true" value="{{$user->first_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastnameInput" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input id="lastnameInput" type="text" name="last_name" placeholder="Last Name" data-rule-required="true" minlength="2"class="form-control" aria-required="true" value="{{$user->last_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailInput" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input id="emailInput" type="text" name="email" placeholder="Enter your email" data-rule-required="true" data-rule-rangelength="[6,30]" data-rule-email="true" class="form-control" aria-required="true" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Roles</label>
                                <div class="col-sm-10">
                                    @foreach($roles as $role)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="roles[]" value="{{$role->id}}" data-rule-required="true" aria-required="true" @if(in_array($role->id, $user_role)) checked @endif> {{$role->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                        <a href="{{ action('Admin\UserController@index') }}" class="btn btn-green btn-flat">Cancel</a>
                                    <button type="submit" class="btn btn-green">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()