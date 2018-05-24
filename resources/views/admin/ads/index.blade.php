<div class="content-body">
    <div class="row">
    <div class="col-xs-12">
        <div class="card card-data-tables product-table-wrapper">
        <header class="card-heading">
            <h2 class="card-title">Zero configuration</h2>
            <small class="dataTables_info">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code></small>
            
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
                    <th data-orderable="false" class="col-xs-2">Image</th>
                    <th class="col-xs-2">Product Title</th>
                    <th class="col-xs-2">SKU</th>
                    <th class="col-xs-2">Price</th>
                    <th data-orderable="false" class="col-xs-1">Active</th>
                    <th class="col-xs-1">Stock</th>
                    <th data-orderable="false" class="col-xs-2">
                    <a href="{{url('admin/ads/create')}}"><button class="btn btn-primary btn-fab  animate-fab"><i class="zmdi zmdi-plus"></i></button></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="checkbox-cell">
                        <span class="checkbox">
                            <label>
                            <input type="checkbox" value="" id="">
                            <span class="checkbox-material"></span>
                            </label>
                        </span>
                        </td>
                        <td><img src="{{asset('/')}}assets/img/ecom/products/12252_Tgi0.jpeg" alt="" class="img-thumbnail" /></td>
                        <td>Grunt</td>
                        <td>#394822</td>
                        <td>$32</td>
                        <td>
                        <div class="togglebutton">
                            <label>
                            <input type="checkbox" class="toggle-info" checked>
                            </label>
                        </div>
                        </td>
                        <td>1,200</td>
                        <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                    </tr>
                @endfor
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>