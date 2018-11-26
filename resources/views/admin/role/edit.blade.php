@extends('layouts.admin-layout')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <header class="card-heading ">
                        <h2 class="card-title">Update Role</h2>
                        <p></p>
                    </header>
                    @include ('admin.errors.list')
                    <div class="card-body">
                        <form id="form-horizontal"
                              accept-charset="UTF-8"
                              method="POST"
                              action="{{ action('Admin\RoleController@update', ['id' => $role->id]) }}"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input id="nameInput" type="text" name="name" placeholder="Enter role name" data-rule-required="true" minlength="2"class="form-control" aria-required="true" value="{{$role->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Permissions</label>
                                <div class="col-sm-10">
                                    @foreach($permissions as $permission)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permissions[]" value="{{$permission->id}}" data-rule-required="true" aria-required="true" @if(in_array($permission->id, $role_permissions)) checked @endif> {{$permission->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{ action('Admin\RoleController@index') }}" class="btn btn-green btn-flat">Cancel</a>
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