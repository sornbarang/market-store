@extends('layouts.admin-layout')
@section('title', 'List State')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card card-data-tables product-table-wrapper">
                    <header class="card-heading">

                        <h2 class="card-title">List State</h2>
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
                                <a href="javascript:void(0)" id="confirmBeforeDelete" data-toggle="tooltip" data-placement="top" data-original-title="Delete Category(s)">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Filter Categories">
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
                                    <th class="col-xs-2">Slug</th>
                                    <th class="col-xs-2">Country</th>
                                    <th data-orderable="false" class="col-xs-2">
                                        <button id="add-new-cat" class="btn btn-primary btn-fab  animate-fab"><i class="zmdi zmdi-plus"></i></button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($states as $state)
                                    <tr>
                                        <td class="checkbox-cell">
                                            <span class="checkbox">
                                              <label>
                                                <input type="checkbox" value="{{$state->id}}" id="">
                                                <span class="checkbox-material"></span>
                                              </label>
                                            </span>
                                        </td>
                                        <td>{{$state->name}}</td>
                                        <td>{{$state->slug}}</td>
                                        <td>{{($state->country->count() > 0) ? $state->country->name : ''}}</td>
                                        <td>
                                            <a href="{{action('Admin\StateController@edit',['id' => $state->id])}}" class="btn btn-info btn-fab btn-fab-sm"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-fab btn-fab-sm warning-delete" data-id="{{$state->id}}"><i class="zmdi zmdi-delete"></i></a>
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

        $(document).on('click touch', '#add-new-cat', function(e) {
            window.location.href='{{action('Admin\StateController@create')}}'
        });

        $(document).on('click.warning-delete', '.warning-delete', function (e) {
            e.stopPropagation();
            var catID = $(this).attr("data-id");
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this category!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
            }).then(function() {
                setTimeout(function () {
                    $.ajax({
                        url: "state/" + catID,
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
                    var catID = [];
                    $('.checkbox-cell input[id*=CheckboxId_][type=checkbox]:checked').each(function () {
                        catID.push($(this).val());
                        $(this).prop('checked', false);
                        $(this).closest("tr").fadeOut();
                        $('#deleteItems').fadeOut();
                    });
                    if(catID.length > 0){
                        $.ajax({
                            url: "state/" + catID.join(','),
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