@if($errors->all())
    <div class="card-body">
        <div class="alert alert-block alert-danger">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="fa fa-times"></i>Alert</h4>
            <p>
                {{ Html::ul($errors->all(), array('class' => 'alert alert-danger')) }}
            </p>
        </div>
    </div>
@endif