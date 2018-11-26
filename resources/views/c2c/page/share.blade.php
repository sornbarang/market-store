<ul> 
    <li> 
        <a href='https://www.facebook.com/sharer/sharer.php?u={{ rawurlencode($url) }}{{ $sep }}title={{ rawurlencode("Check this out! $title. See it here: $url") }}{{ $sep }}media=["{{rawurlencode($image)}}"]' target="_blank">
            <span class="fa fa-facebook"></span>
        </a>
    </li>
    <li>
        <a href="{{$socials['twitter']??'javascript:void(0)'}}" target="_blank">
            <span class="fa fa-twitter"></span>
        </a>
    </li>
    <li>
        <a href="{{$socials['linkedin']??'javascript:void(0)'}}" target="_blank">
            <span class="fa fa-linkedin"></span>
        </a>
    </li> 
</ul>