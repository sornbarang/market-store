@if ($paginator->hasPages())  
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="prev page-numbers" href="#"><span class="lnr lnr-arrow-left"></span></a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><span class="lnr lnr-arrow-left"></span></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers current" href="#">{{ $page }}</a>  
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>   
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><span class="lnr lnr-arrow-right"></span></a> 
        @else 
            <a class="next page-numbers" href="#"><span class="lnr lnr-arrow-right"></span></a> 
        @endif 
@endif
