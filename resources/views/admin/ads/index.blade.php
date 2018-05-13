<div class="content-body">
    <div class="row">
    <div class="col-xs-12">
        <div class="card card-data-tables product-table-wrapper">
        <header class="card-heading">
        {{ AdvMng::getHTML('type') }}
        {{ AdvMng::getHTML('type', true) }}
s
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
                    <button class="btn btn-primary btn-fab  animate-fab"><i class="zmdi zmdi-plus"></i></button>
                    </th>
                </tr>
                </thead>
                <tbody>
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
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/4107_PPxC.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Pixel Heart</td>
                    <td>#293845</td>
                    <td>$22</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info">
                        </label>
                    </div>
                    </td>
                    <td>0</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/12361_1Tww.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>NPS 100</td>
                    <td>#920034</td>
                    <td>$12</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info">
                        </label>
                    </div>
                    </td>
                    <td>0</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/9728_3iWd.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Purple Rain</td>
                    <td>#203457</td>
                    <td>$18</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>3,650</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/10497_iGAk.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Tee is for Triceratops</td>
                    <td>#203496</td>
                    <td>$23</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,234</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/2830_S4ql.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Lake Sunset</td>
                    <td>#203004</td>
                    <td>$29</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,204</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/9232_sTq2.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Rocket Fuel</td>
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
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/6165_zNw9.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>The Astronaut</td>
                    <td>#002395</td>
                    <td>$42</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>994</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/4108_f6Xw.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Pixel Bike</td>
                    <td>#203945</td>
                    <td>$40</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,340</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/3842_Lnmb.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Washington Heritage</td>
                    <td>#002934</td>
                    <td>$22</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/12364_qfN0.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>America!</td>
                    <td>#938493</td>
                    <td>$22</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/5922_6Td6.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>HTTPSTER</td>
                    <td>#029382</td>
                    <td>$22</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/12254_jASi.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Raise the Bar</td>
                    <td>#923042</td>
                    <td>$26</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/12284_CsFA.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>I Stand With Standing Roc</td>
                    <td>#029384</td>
                    <td>$25</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/12300_nEOr.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>The BareNeckers Seal</td>
                    <td>#002934</td>
                    <td>$26</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/10499_elhB.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Movie Night</td>
                    <td>#992374</td>
                    <td>$19</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/9997_Tv74.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Good Stouta</td>
                    <td>#992374</td>
                    <td>$19</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/9484_weNe.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Keep Exploring</td>
                    <td>#039485</td>
                    <td>$19</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/6160_9usp.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Close, Mini, Maxi</td>
                    <td>#049586</td>
                    <td>$29</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/5654_c1Dp.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>The Mountain</td>
                    <td>#934586</td>
                    <td>$27</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/1310_IKdD.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>Cyanocitta cristata</td>
                    <td>#039485</td>
                    <td>$25</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/39_Ie8T.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>A Gaggle of Triangles</td>
                    <td>#349586</td>
                    <td>$20</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                <tr>
                    <td class="checkbox-cell">
                    <span class="checkbox">
                        <label>
                        <input type="checkbox" value="" id="">
                        <span class="checkbox-material"></span>
                        </label>
                    </span>
                    </td>
                    <td><img src="{{asset('/')}}assets/img/ecom/products/7450_2Y7F.jpeg" alt="" class="img-thumbnail" /></td>
                    <td>The Shape of a Landscape</td>
                    <td>#485734</td>
                    <td>$21</td>
                    <td>
                    <div class="togglebutton">
                        <label>
                        <input type="checkbox" class="toggle-info" checked>
                        </label>
                    </div>
                    </td>
                    <td>1,600</td>
                    <td><a href="javascript:void(0)" class="edit-product icon"><i class="zmdi zmdi-edit"></i></a></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>