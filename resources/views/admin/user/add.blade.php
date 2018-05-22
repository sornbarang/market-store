@extends('layouts.admin-layout')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <header class="card-heading ">
                        <h2 class="card-title">Add User</h2>
                        <p></p>
                    </header>
                    <div class="card-body">
                        <form id="form-horizontal"
                              accept-charset="UTF-8"
                              method="POST"
                              action="{{ action('Admin\UserController@store') }}"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-group">
                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input id="nameInput" type="text" name="name" placeholder="Enter your name" data-rule-required="true" minlength="2"class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailInput" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input id="emailInput" type="text" name="email" placeholder="Enter your email" data-rule-required="true" data-rule-rangelength="[6,30]" data-rule-email="true" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passInput" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input id="passInput" type="password" name="password" placeholder="Enter password" data-rule-required="true" data-rule-rangelength="[6,30]" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassInput" class="col-sm-2 control-label">Confirm password</label>
                                <div class="col-sm-10">
                                    <input id="confirmPassInput" type="password" name="confirmPassword" placeholder="Enter confirm password" data-rule-required="true" data-rule-equalto="#passInput" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Roles</label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="roles[]" value="admin" data-rule-required="true" aria-required="true"> Admin
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="roles[]" value="user"> user
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Permission</label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permission[]" value="admin" data-rule-required="true" aria-required="true"> Admin
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permission[]" value="user"> user
                                        </label>
                                    </div>
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