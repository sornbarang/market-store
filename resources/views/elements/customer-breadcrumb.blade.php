<section class="breadcrumb-area mt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('elements.breadcrumb') 
                <h1 class="page-title">
                    @if (Route::has('login'))
                        @auth
                            {{ ucfirst(Auth::user()->name) }}'s
                        @endauth 
                    @endif
                {{NULL !== $data['breadcrub']?$data['breadcrub']:'Application'}}</h1>
            </div><!-- end /.col-md-12 -->
        </div><!-- end /.row -->
    </div><!-- end /.container -->
</section>