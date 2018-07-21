@extends('layouts.admin-layout')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card card-data-tables product-table-wrapper">
                    <header class="card-heading">

                        <h2 class="card-title">List Roles</h2>
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
                                <a href="javascript:void(0)" data-route="role" id="confirmDelete" data-toggle="tooltip" data-placement="top" data-original-title="Delete Product(s)">
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
                                    <th class="col-xs-2">Role</th>
                                    <th class="col-xs-2">Permissions</th>
                                    <th data-orderable="false" class="col-xs-2">
                                        <button id="add-new-role" class="btn btn-primary btn-fab  animate-fab"><i class="zmdi zmdi-plus"></i></button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td class="checkbox-cell">
                                    <span class="checkbox">
                                      <label>
                                        <input type="checkbox" value="{{$role->id}}" id="">
                                        <span class="checkbox-material"></span>
                                      </label>
                                    </span>
                                        </td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->permissions()->pluck('name')->implode(' ')}}</td>
                                        <td>
                                            <a href="{{action('Admin\RoleController@edit',['id' => $role->id])}}" class="btn btn-info btn-fab btn-fab-sm"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="{{action('Admin\RoleController@destroy',['id' => $role->id])}}" class="btn btn-danger btn-fab btn-fab-sm"><i class="zmdi zmdi-delete"></i></a>
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
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).on('click touch', '#add-new-role', function(e) {
            window.location.href='{{action('Admin\RoleController@create')}}'
        });

        $(document).on('click.warning-delete', '.warning-delete', function (e) {
            e.stopPropagation();
            var roleID = $(this).attr("data-id");
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this role!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
            }).then(function() {
                setTimeout(function () {
                    $.ajax({
                        url: "role/" + roleID,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-Token':CSRF_TOKEN,
                        },
                        success: function( msg ) {
                            if(msg.status){
                                swal("Deleted!", "Your data has been deleted.", "success");
                                setTimeout(function () {
                                    document.location.reload(true);
                                }, 3000);
                            }else{
                                swal(
                                    'Cancelled',
                                    'Can not delete record !',
                                    'error'
                                )
                            }
                        },
                        error: function( data ) {
                            swal(
                                'Cancelled',
                                'Can not delete record)',
                                'error'
                            )
                        }
                    });

                }, 600);
            }, function(dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                    swal("Cancelled", "Your action has been cancelled.", "error");
                }
            })
        });


        //Confirm delete
        $('#confirmBeforeDelete').on('click', function (e) {
            e.stopPropagation();
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Delete',
                cancelButtonText: "Cancel",
            }).then(function() {
                setTimeout(function () {
                    var roleID = [];
                    $('.checkbox-cell input[id*=CheckboxId_][type=checkbox]:checked').each(function () {
                        roleID.push($(this).val());
                        $(this).prop('checked', false);
                        $(this).closest("tr").fadeOut();
                        $('#deleteItems').fadeOut();
                    });
                    if(roleID.length > 0){
                        $.ajax({
                            url: "role/" + roleID.join(','),
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-Token':CSRF_TOKEN,
                            },
                            success: function( msg ) {
                                if(msg.status){
                                    swal("Deleted!", "Your data has been deleted.", "success");
                                    setTimeout(function () {
                                        document.location.reload(true);
                                    }, 3000);
                                }else{
                                    swal(
                                        'Cancelled',
                                        'Can not delete record !',
                                        'error'
                                    )
                                }
                            },
                            error: function( data ) {
                                swal(
                                    'Cancelled',
                                    'Can not delete record)',
                                    'error'
                                )
                            }
                        });
                    }

                    if ($('#checkAll').is(":checked")) {
                        $('#checkAll').prop('checked', false);
                    };
                    $('#deleteItems span').text('');

                }, 600);
                setTimeout(function () {
                    $('.card-data-tables table tbody tr').attr('style', '').removeClass('highlight');
                }, 2000);
            }, function(dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                    swal("Cancelled", "Your action has been cancelled.", "error");
                }
            })
        });


    </script>
@endsection()