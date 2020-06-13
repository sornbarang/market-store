
<ul class="media-list thread-list">
    @foreach($data['getUserRateOfProduct'] as $key => $val)
     
        @php  
            $avatar='';
            if(null !== $val->user->profile){
                $media = $val->user->profile->getMedia(); 
                foreach($media as $m){   
                    if($val->user->profile->avatar == $m->id){ 
                        $avatar=$m->id.'/avatar100.png';
                    }
                } 
            }
        @endphp 
        <li class="single-thread">
            <div class="media">
                <div class="media-left">
                    @if(isset($avatar) && !empty($avatar))
                        <img style="max-width:70px;" class="media-object rounded-circle" src="{{Storage::disk('dospace')->url($avatar)}}" alt="Commentator Avatar">
                    @else
                        <a href="#">
                            <img class="media-object rounded-circle" src="{{asset('/')}}images/m1.png" alt="Commentator Avatar">
                        </a>
                    @endif
                </div>
                <div class="media-body">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="media-heading">
                                <a href="{{route('market.mystore',$val->user->id)}}">
                                    <h4>{{$val->user->name}}</h4>
                                </a>
                                <span>
                                    @php 
                                        echo Carbon\Carbon::parse($val->created_at)->diffForHumans();
                                    @endphp
                                </span>
                            </div>
                            <a href="javascript:void(0)">    
                                <div class="rating product--rating userrateproduct" data-rating="{{$val->rating}}">
                                    <input  type="hidden" name="score">
                                </div>
                            </a>
                            
                            <span class="review_tag">support</span>
                        </div> 
                    </div>
                    <p>{{$val->comments}}</p>
                </div>
            </div> 
        </li>
    @endforeach
    <!-- end single comment thread /.comment-->
</ul> 
<!-- end /.media-list -->
<div class="pagination-area pagination-area2">
    {{ $data['getUserRateOfProduct']->links() }}
</div>
<!-- end /.comment pagination area --> 