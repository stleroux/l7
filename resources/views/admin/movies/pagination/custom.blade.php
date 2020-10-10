@if ($paginator->hasPages())

    <ul class="pagination pagination-sm float-right pb-1 mb-0 pr-3" role="navigation">

        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled btn btn-xs btn-primary p-2 font-weight-bold">
                <span>First</span>
            </li>
        @else
            <a href="{{ $paginator->toArray()['first_page_url'] }}">
                <li class="btn btn-xs btn-primary p-2 font-weight-bold">
                    First
                </li>
            </a>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled btn btn-xs btn-primary p-2 font-weight-bold">
                <span>Previous</span>
            </li>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <li class="btn btn-xs btn-primary p-2 font-weight-bold">
                    Previous
                </li>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled">
                    <span>{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="btn btn-xs btn-light p-2">
                            <span>{{ $page }}</span>
                        </li>
                    @else
                        <a href="{{ $url }}">
                            <li class="btn btn-xs btn-primary p-2 font-weight-bold">
                                {{ $page }}
                            </li>
                        </a>
                    @endif
                @endforeach
            @endif

        @endforeach


        {{-- Next Page Link --}}

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                <li class="btn btn-xs btn-primary p-2 font-weight-bold">
                    Next
                </li>
            </a>
        @else
            <li class="disabled btn btn-xs btn-primary p-2 font-weight-bold">
                <span>Next</span>
            </li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->lastPage() == $paginator->currentPage())
            <li class="disabled btn btn-xs btn-primary p-2 font-weight-bold">
                <span>Last</span>
            </li>
        @else
            <a href="{{ $paginator->toArray()['last_page_url'] }}">
                <li class="btn btn-xs btn-primary p-2 font-weight-bold">
                    Last
                </li>
            </a>
        @endif

    </ul>

@endif
