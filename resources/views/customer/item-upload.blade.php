@extends('layouts.app-layout')
@section('content') 

<!--================================
        START BREADCRUMB AREA
    =================================-->
    @include('elements.customer-breadcrumb')
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        @include('elements.customer-menu')

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Upload Your Item</h3>
                                </div>
                            </div>
                        </div>
                    </div><!-- end /.col-md-12 -->
                </div><!-- end /.row -->

                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <form action="#">
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div><!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="country" id="category" class="text_field">
                                                <option value="">Select one</option>
                                                <option value="wordpress">Wordpress</option>
                                                <option value="html">Html</option>
                                                <option value="graphic">Graphics</option>
                                                <option value="illustration">Illustration</option>
                                                <option value="music">Music</option>
                                                <option value="video">Video</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Name <span>(Max 100 characters)</span></label>
                                        <input type="text" id="product_name" class="text_field" placeholder="Enter your product name here...">
                                    </div>

                                    <div class="form-group no-margin">
                                        <p class="label">Product Description</p>
                                        <div id="trumbowyg-demo"></div>
                                    </div>
                                </div><!-- end /.modules__content -->
                            </div><!-- end /.upload_modules -->

                            <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Upload Files</h3>
                                </div><!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Thumbnail <span>(JPEG or PNG 100x100px)</span></p>

                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="thumbnail" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div><!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>Thumbnail.jpg</p>
                                                    <span data-width="89">89%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div><!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div><!-- end /.upload_wrapper -->
                                    </div><!-- end /.form-group -->

                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Main File <span>(ZIP - All files)</span></p>

                                            <div class="custom_upload">
                                                <label for="main_file">
                                                    <input type="file" id="main_file" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div><!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>WordPress Blog Theme.zip</p>
                                                    <span data-width="90">90%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                        <span class="sr-only">90% Complete</span>
                                                    </div>
                                                </div>
                                            </div><!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div><!-- end /.upload_wrapper -->
                                    </div><!-- end /.form-group -->

                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Screenshots <span>(ZIP file of images)</span></p>

                                            <div class="custom_upload">
                                                <label for="screenshot">
                                                    <input type="file" id="screenshot" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div><!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>Thumbnail.jpg</p>
                                                    <span data-width="78">78%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                        <span class="sr-only">78% Complete</span>
                                                    </div>
                                                </div>
                                            </div><!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div><!-- end /.upload_wrapper -->
                                    </div><!-- end /.form-group -->
                                </div><!-- end /.upload_modules -->
                            </div><!-- end /.upload_modules -->

                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Others Information</h3>
                                </div><!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="selected">Files Included</label>
                                                    <select name="country" id="selected" multiple class="text_field">
                                                        <option value="php">php</option>
                                                        <option value="html">Html</option>
                                                        <option value="psd">psd</option>
                                                        <option value="js">javascript</option>
                                                        <option value="coffee">coffeescript</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                            </div><!-- end /.form-group -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="browsers">Compatible Browsers</label>
                                                    <select name="country" id="browsers" multiple class="text_field">
                                                        <option value="ie8">IE8</option>
                                                        <option value="ie9">IE9</option>
                                                        <option value="chrome">Chrome</option>
                                                        <option value="firefox">firefox</option>
                                                        <option value="safari">safari</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                            </div><!-- end /.form-group -->
                                        </div><!-- end /.col-md-6 -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="columns">Columns</label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="country" id="columns" class="text_field">
                                                        <option value="">Choose Columns</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4+</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dimension">Item Dimensions</label>
                                                <input type="text" id="dimension" class="text_field" placeholder="Ex: 1920x6000.">
                                            </div>
                                        </div><!-- end /.col-md-6 -->
                                    </div><!-- end /.row -->
                                    

                                    <div class="form-group">
                                        <label for="soft">Minimum Software Version</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="version" id="soft" class="text_field">
                                                <option value="">Choose version</option>
                                                <option value="4">WordPress 4</option>
                                                <option value="4.1">WordPress 4.1.*</option>
                                                <option value="4.2">WordPress 4.2.*</option>
                                                <option value="4.3">WordPress 4.3.*</option>
                                                <option value="4.4">WordPress 4.4.*</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group radio-group">
                                                <p class="label">High Resolution</p>
                                                <div class="custom-radio">
                                                    <input type="radio" id="yes" class="" name="high_res">
                                                    <label for="yes"><span class="circle"></span>Yes</label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" id="no" class="" name="high_res">
                                                    <label for="no"><span class="circle"></span>no</label>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group radio-group">
                                                <p class="label">Retina Ready</p>
                                                <div class="custom-radio">
                                                    <input type="radio" id="ryes" class="" name="retina">
                                                    <label for="ryes"><span class="circle"></span>Yes</label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" id="rno" class="" name="retina">
                                                    <label for="rno"><span class="circle"></span>no</label>
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->
                                    </div><!-- end /.row -->

                                    <div class="form-group">
                                        <label for="tags">Item Tags <span>(Max 10 tags)</span></label>
                                        <textarea name="tags" id="tags" class="text_field" placeholder="Enter your item tags here..."></textarea>
                                    </div>
                                </div><!-- end /.upload_modules -->
                            </div><!-- end /.upload_modules -->

                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Others Information</h3>
                                </div><!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rlicense">Regular License</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="rlicense" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exlicense">Extended License</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="exlicense" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div><!-- end /.col-md-6 -->

                                    </div><!-- end /.row -->
                                    <div class="or"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single_use">Single User License</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="single_use" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="double_use">2 User License</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="double_use" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="multi_user">Multi User License</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="multi_user" class="text_field" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end /.row -->
                                </div><!-- end /.modules__content -->
                            </div><!-- end /.upload_modules -->

                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg">Submit Your Item for Review</button>
                        </form>
                    </div><!-- end /.col-md-8 -->

                    <div class="col-md-4 col-sm-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Quick Upload  Rules</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>Image Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis interdum.</p>
                                    </div>

                                    <div class="card_info">
                                        <h4>File Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis interdum.</p>
                                    </div>

                                    <div class="card_info">
                                        <h4>Vector Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis interdum.</p>
                                    </div>
                                </div>
                            </div><!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Trouble Uploading?</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div><!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>More Upload Info</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the
                                            labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div><!-- end /.sidebar-card -->
                        </aside><!-- end /.sidebar -->
                    </div><!-- end /.col-md-4 -->
                </div><!-- end /.row -->
            </div><!-- end /.container -->
        </div><!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    @include('elements.joinshop')
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
    
@stop