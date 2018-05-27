@extends('layouts.admin-layout')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card card-data-tables product-table-wrapper">
                    <header class="card-heading">

                        <h2 class="card-title">List Permissions</h2>
                        {{--<small class="dataTables_info">User info</small>--}}

                        <div class="card-search">
                            <div id="productsTable_wrapper" class="form-group label-floating is-empty">
                                <i class="zmdi zmdi-search search-icon-left"></i>
                                <input type="text" class="form-control filter-input" placeholder="Filter Products..." autocomplete="off">
                                <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <ul class="card-actions icons right-top">
                            <li id="deleteItems" style="display: none;">
                                <span class="label label-info pull-left m-t-5 m-r-10 text-white"></span>
                                <a href="javascript:void(0)" id="confirmDelete" data-toggle="tooltip" data-placement="top" data-original-title="Delete Product(s)">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Filter Products">
                                    <i class="zmdi zmdi-filter-list"></i>
                                </a>
                            </li>
                            <li class="dropdown" data-toggle="tooltip" data-placement="top" data-original-title="Show Entries">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <div id="dataTablesLength">
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Export All">
                                    <i class="zmdi zmdi-inbox"></i>
                                </a>
                            </li>
                        </ul>
                    </header>
                    <div class="card-body p-0">
                        <div class="alert alert-info m-20 hidden-md hidden-lg" role="alert">
                            <p>
                                Heads up! You can Swipe table Left to Right on Mobile devices.
                            </p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Success</strong> {!! session('success') !!}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table id="productsTable" class="mdl-data-table product-table m-t-30" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th data-orderable="false" class="col-xs-1">
                                <span class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" id="checkAll">
                                    <span class="checkbox-material"></span>
                                  </label>
                                </span>
                                    </th>
                                    <th class="col-xs-2">Name</th>
                                    <th class="col-xs-2">Roles that have this permission</th>
                                    <th data-orderable="false" class="col-xs-2">
                                        <button id="add-new-permission" class="btn btn-primary btn-fab  animate-fab"><i class="zmdi zmdi-plus"></i></button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td class="checkbox-cell">
                                    <span class="checkbox">
                                      <label>
                                        <input type="checkbox" value="" id="">
                                        <span class="checkbox-material"></span>
                                      </label>
                                    </span>
                                        </td>
                                        <td>{{$permission->name}}</td>
                                        <td>{{$permission->roles->pluck('name')->implode(', ')}}</td>
                                        <td>
                                            <a href="{{action('Admin\PermissionController@edit',['id' => $permission->id])}}" class="btn btn-info btn-fab btn-fab-sm"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="{{action('Admin\PermissionController@destroy',['id' => $permission->id])}}" class="btn btn-danger btn-fab btn-fab-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
@section('javascript')
    <script>
        $(document).on('click touch', '#add-new-permission', function(e) {
            window.location.href='{{action('Admin\PermissionController@create')}}'
        });
    </script>
@endsection()