@extends('layouts.app-layout')
@section('content')
<!--================================
    END FEATURED PRODUCT AREA
=================================-->

@include('elements.search')
    @if(count($data['searchpros']) > 0)
    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Wordpress
                                        <span>35</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Landing Page
                                        <span>45</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Psd Template
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Plugins
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">HTML Template
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Components
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

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
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <!-- Request::url() get current url -->
                                <!-- Request::query('searchstr') is get param  -->
                                <form action="{{ Request::url() }}" method="get">
                                    <input type="hidden" value="{{ Request::query('record') ?? 25 }}" name="record">
                                    <input type="hidden" value="{{ Request::query('searchstr') ?? '' }}" name="searchstr">
                                    <select name="price"> 
                                        <option value="low" {{$data['order']=='asc'?'selected':''}}>Price : Low to High</option>
                                        <option value="high" {{$data['order']=='desc'?'selected':''}}>Price : High to low</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </form>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <!-- Request::url() get current url -->
                                <form action="{{ Request::url() }}">
                                <!-- Request::query('searchstr') is get param  -->
                                <input type="hidden" value="{{ Request::query('searchstr') ?? '' }}" name="searchstr">
                                <input type="hidden" value="{{ Request::query('price') ?? 'low' }}" name="price">
                                    <select name="record">
                                        <option value="12" {{$data['record']==12?'selected':''}}>12 Items per page</option>
                                        <option value="15" {{$data['record']==15?'selected':''}}>15 Items per page</option>
                                        <option value="25" {{$data['record']==25?'selected':''}}>25 Items per page</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </form>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--layout">
                            <a href="javascript:void(0)">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('/')}}images/svg/grid.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('/')}}images/svg/list.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!-- end /.filter-area -->

    <!--================================
        END FILTER AREA
    =================================-->
    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products pt-5">
        <!-- start container -->
        <div class="container searchcontainer"> 
            @include('elements.search-items')
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->
    @else
        <h6 class="text-center">No records of {{$data['strsearch']}}</h6>
    @endif
<!--================================
    START COUNTER UP AREA
=================================-->
{{-- @include('elements.membercount') --}}
<!--================================
    START CALL TO ACTION AREA
=================================-->
@include('elements.joinshop')
<!--================================
    END CALL TO ACTION AREA
=================================-->
@stop
@section('cusomescript')
<script type="text/javascript">
    $(document).ready(function(){ 
        rating();
        function rating(){
            $('div.raty.rateproduct').raty(
                { 
                    starOff:"{{asset('imgs/no.png')}}",
                    iconRange: [            
                        { range: 1, on: "{{asset('imgs/0.png')}}"},
                        { range: 2, on: "{{asset('imgs/1.png')}}"},
                        { range: 3, on: "{{asset('imgs/2.png')}}"}
                    ],   
                    hints: ['unlike','normal','love'],
                    readOnly:true,
                    single:true,
                    number:3,
                    readOnly:true,
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
        }
        function getPosts(mycurl) {
            $.ajax({
                url : mycurl,
                dataType: 'json',
            }).done(function (data) { 
                $('.searchcontainer').empty().html(data);
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
                    var mycurl = "<?php echo url()->full();?>"+"&from="+from+"&to="+to;
                }else{
                    var mycurl = "<?php echo url()->full();?>"+"&from="+from+"&to="+to;
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
        $(document).on('click', '.searchcontainer .pagination-area a', function (e) {
            getPostsByPage($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        }); 
        function getPostsByPage(page) {
            var urlPage='';
            var from=parseInt($(".price-ranges > span.from.rounded").text().replace('$',''));
            var to=parseInt($(".price-ranges > span.to.rounded").text().replace('$','')); 
            if(to !='' && to > 0){
                urlPage= '<?php echo url()->full();?>'+'&page=' + page+'&from='+from+'&to='+to;
            }else{
                urlPage = '<?php echo url()->full();?>'+'&page=' + page;
            }
            console.log(urlPage);
            $.ajax({
                url : urlPage,
                dataType: 'json',
            }).done(function (data) { 
                $('.searchcontainer').empty().html(data); 
                rating();
                // location.hash = page; 
            }).fail(function () {
                alert('Posts could not be loaded.');
            });
        }
    });
</script>
@stop 