<div class="content-body">
<div class="row">
    <div class="col-xs-12">
    <div class="card">
        <header class="card-heading ">
        <h2 class="card-title">Form Validation Examples</h2>
        <p>Material Wrap combines bootstrap, with jQuery Validation plugin and Material Design patterns to provide clear and precise feedback for users. </p>
        </header>
        <div class="card-body">
        <form id="adsEdit" method="post" action="{{url('/admin/ads')}}"  class="form-horizontal" enctype="multipart/form-data">
            @csrf     
            <div class="form-group">
                <label for="nameInput" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input value="{{$data['advert']->alt}}" id="nameInput" type="text" name="alt" placeholder="Enter your name" data-rule-required="true" minlength="2"class="form-control" aria-required="true">
                </div>
            </div>
            {{--<div class="form-group is-fileinput is-empty">
                <label for="fileInput" class="col-sm-2 control-label">Image upload</label>
                <div class="col-sm-10">
                    <div class="input-group">
                    <input id="fileInput" type="file" name="image" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ion-image mr-5" data-rule-required="true" data-rule-accept="image/*" class="filestyle" aria-required="true">
                    <div class="input-group">
                        <input name="image" type="text" readonly="" class="form-control" placeholder="Upload one or more files...">
                        <span class="input-group-btn input-group-sm">
                        <button type="button" class="btn btn-primary btn-fab btn-fab-sm">
                            <i class="zmdi zmdi-attachment-alt"></i>
                        </button>
                        </span>
                    </div>
                    </div>
                </div>
            </div>--}}
            <div class="form-group">
                <img style="margin:0 auto;" id="image_upload_preview"  alt="Your ads" src="{{Storage::url($data['advert']->image_url)}}" />
                <div class="rmbtn">
                    <a href="javascript:void(0)" class="btn btn-danger btn-flat">Remove</a>
                </div>
                <div class="input-group" style="width:50%;margin:0 auto;">
                    <input name="image" id="file" type="file" class="form-control" placeholder="File Upload...">
                    <div class="input-group">
                        <input id="myinputfile" type="text" readonly="" class="form-control" placeholder="Choose one ads">
                        <span class="input-group-btn input-group-sm">
                        <button type="button" class="btn btn-info btn-fab btn-fab-sm">
                            <i class="zmdi zmdi-attachment-alt"></i>
                        </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="websiteInput" class="col-sm-2 control-label">Url</label>
                <div class="col-sm-10">
                    <input value="{{$data['advert']->url}}" id="websiteInput" type="text" name="url" placeholder="Enter website" data-rule-required="true" data-rule-url="true" class="form-control" aria-required="true">
                </div>
            </div> 
            <div class="form-group"> 
                <label for="" class="col-sm-2 control-label">Position</label>
                    <div class="col-sm-10">
                        <select class="select form-control" name="advert_category_id">
                            <option value="0">Select an Option</option>
                            @foreach($data['advertCategory'] as $adsCat)
                            <option value="{{$adsCat->id}}" {{$data['advert']->advert_category_id==$adsCat->id?'selected':''}}>{{ucwords($adsCat->type)}}</option>
                            @endforeach 
                        </select>  
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Active</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="active" value="1" data-rule-required="true" aria-required="true" {{$data['advert']->active==1?'checked':''}}> Publish
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="active" value="0"> unpublish
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>