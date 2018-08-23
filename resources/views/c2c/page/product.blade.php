@extends('layouts.app-layout')
@section('content')

@include('elements.search')

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2">
                    <div class="pull-left">
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <!-- Request::url() get current url --> 
                                    <form action="{{ Request::url() }}" method="get">
                                        <!-- Request::query('record') is get param  -->
                                        <input type="hidden" value="{{ Request::query('record') ?? 25 }}" name="record">
                                        <select name="price"> 
                                            <option value="low" {{isset($data['order']) ? $data['order']=='asc'?'selected':'':''}}>Price : Low to High</option>
                                            <option value="high" {{isset($data['order']) ? $data['order']=='desc'?'selected':'':''}}>Price : High to low</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </form>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <!-- Request::url() get current url -->
                                    <form action="{{ Request::url() }}">
                                        <!-- Request::query('price') is get param  -->
                                        <input type="hidden" value="{{ Request::query('price') ?? 'low' }}" name="price">
                                        <select name="record">
                                            <option value="12" {{isset($data['record'])?$data['record']==12?'selected':'':''}}>12 Items per page</option>
                                            <option value="15" {{isset($data['record'])?$data['record']==15?'selected':'':''}}>15 Items per page</option>
                                            <option value="25" {{isset($data['record'])?$data['record']==25?'selected':'':''}}>25 Items per page</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </form>
                                </div>
                            </div> 
                        </div>
                        <div class="pull-right">
                            <div class="filter__option filter--dropdown filter--range">
                                <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                    <span class="lnr lnr-chevron-down"></span>
                                </a>
                                <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                    <div class="range-slider price-range"></div>

                                    <div class="price-ranges">
                                        <span class="from rounded">$0</span>
                                        <span class="to rounded">$0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__option filter--layout">
                                <a href="javascript:void(0)">
                                    <div class="svg-icon"><img class="svg" src="{{asset('images/svg/grid.svg')}}" alt="it's just a layout control folks!"></div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="svg-icon"><img class="svg" src="{{asset('images/svg/list.svg')}}" alt="it's just a layout control folks!"></div>
                                </a>
                            </div>
                        </div>
                    </div><!-- end filter-bar -->
                </div><!-- end /.col-md-12 -->
            </div><!-- end filter-bar -->
        </div>
    </div>
    <!--================================
        END FILTER AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================--> 
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container"> 
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-md-3">
                    
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar"> 
                        <div class="sidebar-card card--category">
                            
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse"  aria-expanded="true" aria-controls="collapse1">
                                <h4 >Categories <span class="lnr lnr-chevron-down"></span></h4>
                            </a> 
                            <div class="collapse in collapsible-content show" id="collapse1" style="padding:0;">
                                <div class="tree well">
                                    <ul>  
                                        {{-- renderNode call from helpers.php in app/helpers.php --}}
                                        @if(isset($data['nest']) && !empty($data['nest']))
                                            @foreach($data['nest'] as $node)
                                                @php 
                                                    // $r is route link
                                                    $r=route('market.dynamiccat');
                                                @endphp
                                                {!!renderNode($node,$r,$slugName)!!}
                                            @endforeach
                                        @else
                                            <p>No category</p>
                                        @endif 
                                    </ul>
                                </div> 
                            </div><!-- end /.collapsible_content --> 
                        </div><!-- end /.sidebar-card -->  
                        </aside><!-- end aside -->
                </div><!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-md-9 cAllProducts"> 
                    @include('elements.product')
                </div><!-- end /.col-md-9 -->
            </div><!-- end /.row -->
            
            
            
        </div><!-- end /.container -->

    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->
@section('cusomescript')
<script type="text/javascript">
    $(document).ready(function(){ 
        rating();
    function rating(){
        $('div.rateproduct.cproduct').raty(
            { 
                starOff   :"{{asset('imgs/no.png')}}",
                iconRange: [            
                    { range: 1, on: "{{asset('imgs/0.png')}}"},
                    { range: 2, on: "{{asset('imgs/1.png')}}"},
                    { range: 3, on: "{{asset('imgs/2.png')}}"}
                ],   
                hints: ['unlike','normal','love'],
                readOnly:true,
                single:true,
                number:3,
                score: function() {
                    if($(this).attr('data-rating') >=4){
                        $num=3;
                    }else if($(this).attr('data-rating') < 4 && $(this).attr('data-rating') >= 2 ){
                        $num=2;
                    }else if($(this).attr('data-rating') < 2 && $(this).attr('data-rating') >= 1 ){
                        $num=1;
                    }else{
                        $num=2;
                    }
                    return $num;
                }
            }
        ); 
    };
    function getPosts(mycurl) {
        $.ajax({
            url : mycurl,
            dataType: 'json',
        }).done(function (data) { 
            $('.cAllProducts').empty().html(data);
            rating(); 
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
    var $priceFrom = $('.price-ranges .from'),
        $priceTo = $('.price-ranges .to');
    $(".price-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [0, 0],
        slide: function (event, ui) {
            $priceFrom.text("$" + ui.values[0]);
            $priceTo.text("$" + ui.values[1]);
        },
        change: function( event, ui ) { 
            const segm="{{Request::get('page')}}"; 
            const from=ui.values[0]; 
            const to=ui.values[1];
            if(segm !='' && segm !=null){
                var mycurl = "{{url()->full()}}"+"&from="+from+"&to="+to;
            }else{
                var mycurl = "{{url()->full()}}"+"?from="+from+"&to="+to;
            } 
            getPosts(mycurl);
        }
    });
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPostsByPage(page);
            }
        }
    }); 
    $(document).on('click', '.cAllProducts .pagination-area.categorised_item_pagination a', function (e) {
        getPostsByPage($(this).attr('href').split('page=')[1]);
        e.preventDefault();
    }); 
    function getPostsByPage(page) {
        var urlPage='';
        var from=parseInt($(".price-ranges > span.from.rounded").text().replace('$',''));
        var to=parseInt($(".price-ranges > span.to.rounded").text().replace('$','')); 
        if(to !='' && to > 0){
            urlPage= '?page=' + page+'&from='+from+'&to='+to;
        }else{
            urlPage = '?page=' + page;
        }
        $.ajax({
            url : urlPage,
            dataType: 'json',
        }).done(function (data) { 
            $('.cAllProducts').empty().html(data); 
            rating();
            location.hash = page; 
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
        // $(".ui-slider-handle").mouseup(function(e){
        //     const segm="{{Request::get('page')}}"; 
        //     const from=$(".price-ranges > span.from.rounded").text().replace('$','');
        //     alert(from);
        //     const to=$(".price-ranges > span.to.rounded").text().replace('$',''); 
        //     if(segm !='' && segm !=null){
        //         var mycurl = "{{url()->full()}}"+"&from="+from+"&to="+to;
        //     }else{
        //         var mycurl = "{{url()->full()}}"+"?from="+from+"&to="+to;
        //     }
        //     console.log(mycurl);
        //     getPosts(mycurl);
        //    e.preventDefault();
        // });
    });
</script>
@stop 
<!--================================
    START COUNTER UP AREA
=================================-->
{{--@include('elements.membercount')--}}
<!--================================
    END COUNTER UP AREA
=================================-->
<!--================================
    START CALL TO ACTION AREA
=================================-->
@include('elements.joinshop')

@stop