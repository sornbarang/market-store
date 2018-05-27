
@if (session('succeess')) 
    <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('succeess') }}.</strong>
    </div>
@elseif(session('error'))
    <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{ session('error') }}.</strong>
    </div>
@endif 
<div class="content-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-data-tables product-table-wrapper">
                <header class="card-heading">
                    <h2 class="card-title">Manage Products</h2>
                    <small class="dataTables_info"></small>
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
                                        <button class="btn btn-primary btn-fab  animate-fab" data-toggle="modal" data-target="#product_add_modal"><i class="zmdi zmdi-plus"></i></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($data['products'] as $val)
                                @php
                                    $arrimg=explode(',',$val->image);
                                @endphp
                                <tr>
                                    <td class="checkbox-cell">
                                        <span class="checkbox">
                                        <label>
                                            <input type="checkbox" value="{{$val->id}}" id="">
                                            <span class="checkbox-material"></span>
                                        </label>
                                        </span>
                                    </td> 
                                    <td><img src="{{Storage::url($arrimg[0])}}" alt="" class="img-thumbnail" /></td>
                                    <td>{{$val->name}}</td>
                                    <td>#394822</td>
                                    <td>${{$val->price}}</td>
                                    <td>
                                        <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" class="toggle-info" {{$val->active==1?'checked':''}}>
                                        </label>
                                        </div>
                                    </td>
                                    <td>1,200</td>
                                    <td>
                                        <!-- <a href="javascript:void(0)" class="icon edit-product" data-drawer="open-right-lg"><i class="zmdi zmdi-edit"></i></a> -->
                                        <a href="javascript:void(0)" class="icon edit-product" data-toggle="modal" data-target="#product_edit_modal" data-id="{{$val->id}}"><i class="zmdi zmdi-edit"></i></a>
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
<!-- Add mode -->
<form  id="addProduct" method="post" action="{{url('admin/product')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" id="sumernotehidden" name="sumernotehidden"> 
<div class="modal fade" id="product_add_modal" tabindex="-1" role="dialog" aria-labelledby="tab_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header p-b-15">
            
            <h4 class="modal-title">Product Setup</h4>
            <ul class="card-actions icons right-top">
            
            <a href="javascript:void(0)" data-dismiss="modal" class="text-white" aria-label="Close">
                <i class="zmdi zmdi-close"></i>
            </a>
            
            </ul>
        </div>
        <div class="modal-body p-0">
            <div class="tabpanel">
            <ul class="nav nav-tabs p-0">
                <li class="active" role="presentation"><a href="#product_add_general" data-toggle="tab" aria-expanded="true">General Info</a></li>
                <!-- <li role="presentation"><a href="#product_add_images" data-toggle="tab" aria-expanded="true">Product Images</a></li> -->
                <!-- <li role="presentation"><a href="#product_add_price" data-toggle="tab" aria-expanded="true">Price</a></li> -->
                <!-- <li role="presentation"><a href="#product_add_inventory" data-toggle="tab" aria-expanded="true">Inventory</a></li>
                <li role="presentation"><a href="#product_add_shipping" data-toggle="tab" aria-expanded="true">Shipping</a></li> -->
            </ul>
            </div>
            <div class="tab-content">
            <div class="tab-pane fadeIn active" id="product_add_general">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form class="form-horizontal"> -->
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Title</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Price</label>
                        <input name="price" type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" autocomplete="off">
                        <!-- <input name="price" type="text" class="form-control"> -->
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview"  alt="your image" />
                                <div class="rmbtn">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-flat">Remove</a>
                                </div>
                                <div class="input-group">
                                    <input name="photos[]" id="file" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview1"  alt="your image" />
                                <div class="rmbtn">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-flat">Remove</a>
                                </div>
                                <div class="input-group">
                                    <input name="photos[]" id="file1" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview2"  alt="your image" />
                                <div class="rmbtn">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-flat">Remove</a>
                                </div>
                                <div class="input-group">
                                    <input name="photos[]" id="file2" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview3"  alt="your image" />
                                <div class="rmbtn">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-flat">Remove</a>
                                </div>
                                <div class="input-group">
                                    <input name="photos[]" id="file3" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="add_product_desc">Say hello to a triangular cluster of neatly organized chaos, wrapped in a tasty cyan-to-magenta rainbow roll and deep-fried to imperfection.</div>
                    </div>
                    <div class="form-group label-floating is-empty"> 
                        <label class="checkbox-inline">
                            <input name="active" type="checkbox" id="inlineCheckbox1" value="0"> Active
                        </label>
                    </div>
                    {{--<div class="chips chips-placeholder"></div>--}}
                    <!-- </form>  -->
                </div>
                </div>
            </div>
            {{--<div class="tab-pane fadeIn" id="product_add_images">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                <form id="product_add_images_form" method="post" action="{{url('admin/product')}}" class="dropzone" enctype="multipart/form-data">
                    @csrf
                    <div class="fallback">
                        <input name="photo" type="file" multiple />
                    </div>
                </form> 
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_price">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Price</label>
                            <input name="price" type="text" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Compare at price</label>
                            <input name="compareprice" type="text" class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="togglebutton m-b-15 ">
                                    <label>
                                        <input type="checkbox" class="toggle-info" checked>   Charge taxes on this product
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_inventory">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">SKU (Stock Keeping Unit)</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Barcode (ISBN, UPC, GTIN, etc.)</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Inventory policy</label>
                            <select class="select form-control">
                            <option selected>Don't track inventory</option>
                            <option>Track this product's inventory</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_shipping">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Width</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Height</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Depth</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <label class="control-label">Weight</label>
                            <input type="text" class="form-control" aria-label="...">
                            <div class="input-group-btn suffix-select">
                                <select class="select form-control">
                                <option>lb</option>
                                <option>kg</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Extra Shipping Fee</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" id="submitbtn" class="btn btn-primary">Add Product</button>
            </div>
        </div>
        <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
</div> 
</form>

<!-- edit mode -->
<form  id="editProduct" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" id="sumernotehidden" name="sumernotehidden"> 
<input type="hidden" id="editid" name="editid"> 
<div class="modal fade" id="product_edit_modal" tabindex="-1" role="dialog" aria-labelledby="tab_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header p-b-15">
            
            <h4 class="modal-title">Edit Product Setup</h4>
            <ul class="card-actions icons right-top">
            
            <a href="javascript:void(0)" data-dismiss="modal" class="text-white" aria-label="Close">
                <i class="zmdi zmdi-close"></i>
            </a>
            
            </ul>
        </div>
        <div class="modal-body p-0">
            <div class="tabpanel">
            <ul class="nav nav-tabs p-0">
                <li class="active" role="presentation"><a href="#product_add_general" data-toggle="tab" aria-expanded="true">General Info</a></li>
                <!-- <li role="presentation"><a href="#product_add_images" data-toggle="tab" aria-expanded="true">Product Images</a></li> -->
                <!-- <li role="presentation"><a href="#product_add_price" data-toggle="tab" aria-expanded="true">Price</a></li> -->
                <!-- <li role="presentation"><a href="#product_add_inventory" data-toggle="tab" aria-expanded="true">Inventory</a></li>
                <li role="presentation"><a href="#product_add_shipping" data-toggle="tab" aria-expanded="true">Shipping</a></li> -->
            </ul>
            </div>
            <div class="tab-content">
            <div class="tab-pane fadeIn active" id="product_add_general">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form class="form-horizontal"> -->
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Title</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Price</label>
                        <input name="price" type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" autocomplete="off">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                            
                                <img id="image_upload_preview"  alt="your image" />
                                <div class="input-group">
                                    <input name="photos" id="file" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview1"  alt="your image" />
                                <div class="input-group">
                                    <input name="photos1" id="file1" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview2"  alt="your image" />
                                <div class="input-group">
                                    <input name="photos2" id="file2" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="form-group label-floating is-empty">
                                <img id="image_upload_preview3"  alt="your image" />
                                <div class="input-group">
                                    <input name="photos3" id="file3" type="file" class="form-control" placeholder="File Upload...">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
                                        <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="add_product_desc">Say hello to a triangular cluster of neatly organized chaos, wrapped in a tasty cyan-to-magenta rainbow roll and deep-fried to imperfection.</div>
                    </div>
                    <div class="form-group label-floating is-empty"> 
                        <label class="checkbox-inline">
                            <input name="active" type="checkbox" id="inlineCheckbox1" value="0"> Active
                        </label>
                    </div>
                    {{--<div class="chips chips-placeholder"></div>--}}
                    <!-- </form>  -->
                </div>
                </div>
            </div>
            {{--<div class="tab-pane fadeIn" id="product_add_images">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                <form id="product_add_images_form" method="post" action="{{url('admin/product')}}" class="dropzone" enctype="multipart/form-data">
                    @csrf
                    <div class="fallback">
                        <input name="photo" type="file" multiple />
                    </div>
                </form> 
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_price">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Price</label>
                            <input name="price" type="text" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Compare at price</label>
                            <input name="compareprice" type="text" class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="togglebutton m-b-15 ">
                                    <label>
                                        <input type="checkbox" class="toggle-info" checked>   Charge taxes on this product
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_inventory">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">SKU (Stock Keeping Unit)</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Barcode (ISBN, UPC, GTIN, etc.)</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Inventory policy</label>
                            <select class="select form-control">
                            <option selected>Don't track inventory</option>
                            <option>Track this product's inventory</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            {{--<div class="tab-pane fadeIn" id="product_add_shipping">
                <div class="card card p-20 p-t-10 m-b-0">
                <div class="card-body">
                    <!-- <form> -->
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Width</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Height</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Depth</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <label class="control-label">Weight</label>
                            <input type="text" class="form-control" aria-label="...">
                            <div class="input-group-btn suffix-select">
                                <select class="select form-control">
                                <option>lb</option>
                                <option>kg</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <label class="control-label">Extra Shipping Fee</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                </div>
            </div>--}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
            <button type="submit" id="submitbtn" class="btn btn-primary">Update Product</button>
            </div>
        </div>
        <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
</div> 
</form>

<!-- edit  -->
<aside class="drawer-right-lg mw-lightGray drawer-fixed ecom-edit-panel">
    <div class="drawer-content">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        General Info
                        </a>
                    </h4>
                </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group label-floating">
                                <label class="control-label">Title</label>
                                <input type="text" class="form-control" value="A Gaggle of Triangles">
                            </div>
                            <div class="form-group">
                                <div id="edit_product_desc">Say hello to a triangular cluster of neatly organized chaos, wrapped in a tasty cyan-to-magenta rainbow roll and deep-fried to imperfection.</div>
                            </div>
                            <div class="chips chips-placeholder"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Product Images
            </a>
        </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <div class="edit_product_img min-h-200">
            <div><img src="{{asset('/')}}assets/img/ecom/products/39_Ie8T.jpeg" alt=""></div>
            <div><img src="{{asset('/')}}assets/img/ecom/products/39_8wMD.jpeg" alt=""></div>
            <div><img src="{{asset('/')}}assets/img/ecom/products/39_JnFC.jpeg" alt=""></div>
            </div>
        </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Price
            </a>
        </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
            <form>
            <div class="row">
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <label class="control-label">Price</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <label class="control-label">Compare at price</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group">
                    <div class="togglebutton m-b-15 ">
                    <label>
                        <input type="checkbox" class="toggle-info" checked>   Charge taxes on this product
                    </label>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    {{--<div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Inventory
            </a>
        </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
            <form>
            <div class="row">
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">SKU (Stock Keeping Unit)</label>
                    <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Barcode (ISBN, UPC, GTIN, etc.)</label>
                    <input type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="form-group">
                    <label for="" class="control-label">Inventory policy</label>
                    <select class="select form-control">
                    <option selected>Don't track inventory</option>
                    <option>Track this product's inventory</option>
                    </select>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>--}}
    {{--<div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Shipping
            </a>
        </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">
            <form>
            <div class="row">
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Width</label>
                    <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Height</label>
                    <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Depth</label>
                    <input type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <div class="input-group">
                    <label class="control-label">Weight</label>
                    <input type="text" class="form-control" aria-label="...">
                    <div class="input-group-btn suffix-select">
                        <select class="select form-control">
                        <option>lb</option>
                        <option>kg</option>
                        </select>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-12">
                <div class="form-group label-floating is-empty">
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <label class="control-label">Extra Shipping Fee</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>--}}
    <footer class="drawer-footer">
        <button type="button" class="btn btn-default" data-dismiss="drawer">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </footer>
    <section id="chat_compose_wrapper">
        <div class="tippy-top">
            <div class="recipient">Allison Grayce</div>
            <ul class="card-actions icons  right-top">
                <li>
                <a href="javascript:void(0)">
                    <i class="zmdi zmdi-videocam"></i>
                </a>
                </li>
                <li class="dropdown">
                <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                <ul class="dropdown-menu btn-primary dropdown-menu-right">
                    <li>
                    <a href="javascript:void(0)">Option One</a>
                    </li>
                    <li>
                    <a href="javascript:void(0)">Option Two</a>
                    </li>
                    <li>
                    <a href="javascript:void(0)">Option Three</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="javascript:void(0)" data-chat="close">
                    <i class="zmdi zmdi-close"></i>
                </a>
                </li>
            </ul>
        </div>
        <div class='chat-wrapper scrollbar'>
            <div class='chat-message scrollbar'>
                <div class='chat-message chat-message-recipient'>
                <img class='chat-image chat-image-default' src='assets/img/profiles/05.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                    <p>Hey Mike, we have funding for our new project!</p>
                    </div>
                    <div class='chat-details'>
                    <span class='today small'></span>
                    </div>
                </div>
                </div>
                <div class='chat-message chat-message-sender'>
                <img class='chat-image chat-image-default' src='assets/img/profiles/02.jpg' />
                <div class='chat-message-wrapper '>
                    <div class='chat-message-content'>
                    <p>Awesome! Photo booth banh mi pitchfork kickstarter whatever, prism godard ethical 90's cray selvage.</p>
                    </div>
                    <div class='chat-details'>
                    <span class='today small'></span>
                    </div>
                </div>
                </div>
                <div class='chat-message chat-message-recipient'>
                <img class='chat-image chat-image-default' src='assets/img/profiles/05.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                    <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                    </div>
                    <div class='chat-details'>
                    <span class='today small'></span>
                    </div>
                </div>
                </div>
                <div class='chat-message chat-message-sender'>
                <img class='chat-image chat-image-default' src='assets/img/profiles/02.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                    <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                    </div>
                    <div class='chat-details'>
                    <span class='today small'></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <footer id="compose-footer">
            <form class="form-horizontal compose-form">
                <ul class="card-actions icons left-bottom">
                    <li>
                        <a href="javascript:void(0)">
                        <i class="zmdi zmdi-attachment-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                        <i class="zmdi zmdi-mood"></i>
                        </a>
                    </li>
                </ul>
                <div class="form-group m-10 p-l-75 is-empty">
                    <div class="input-group">
                        <label class="sr-only">Leave a comment...</label>
                        <input type="text" class="form-control form-rounded input-lightGray" placeholder="Leave a comment..">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-blue btn-fab  btn-fab-sm">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                        </span>
                    </div>
                </div>
            </form>
        </footer>
    </section> 
</aside>
