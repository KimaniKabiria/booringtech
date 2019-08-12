@if ($paginator->hasPages())

    <div class="pagination-wrapper" style="margin-top:20px">
        <nav class="pagination is-rounded is-centered" role="navigation" aria-label="pagination">

            <ul class="pagination-list">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <a class="pagination-previous" aria-disabled="true"><span>&laquo;</span></a> --}}
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">&laquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="pagination-ellipsis"><a>&hellip;</a></span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <a class="pagination-link is-current">{{ $page }}</a>
                                </li>
                            @else
                                <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next">&raquo;</a>
                    </li>
                @else
                    {{-- <li class="pagination-next"><span aria-hidden="true">&rsaquo;</span></li> --}}
                @endif
            </ul>
        </nav>
    </div>



@endif
