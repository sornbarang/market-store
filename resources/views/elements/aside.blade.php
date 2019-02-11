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
                                if(isset($data['type']) && $data['type']=='shop'){
                                    // $r is route link
                                    $r=route('shop.dynamiccat');
                                }else{
                                    // $r is route link
                                    $r=route('market.dynamiccat');
                                }
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