@if ($paginator->hasPages())

    <ul class="">

        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled badge badge-primary p-2" style="background-color: #ADD8E6">
                <span>First</span>
            </li>
        @else
            <a href="{{ $paginator->toArray()['first_page_url'] }}" class="text-light">
                <li class="badge badge-primary text-light p-2">
                    First
                </li>
            </a>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled badge badge-primary p-2" style="background-color: #ADD8E6">
                <span>Previous</span>
            </li>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="text-light" rel="prev">
                <li class="badge badge-primary text-light p-2">
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
                        <li class="badge badge-light p-2">
                            <span>{{ $page }}</span>
                        </li>
                    @else
                        <a href="{{ $url }}" class="text-light">
                            <li class="badge badge-primary p-2">
                                {{ $page }}
                            </li>
                        </a>
                    @endif
                @endforeach
            @endif

        @endforeach


        {{-- Next Page Link --}}

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="text-light" rel="next">
                <li class="badge badge-primary p-2">
                    Next
                </li>
            </a>
        @else
            <li class="disabled badge badge-primary p-2" style="background-color: #ADD8E6">
                <span>Next</span>
            </li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->lastPage() == $paginator->currentPage())
            <li class="disabled badge badge-primary p-2" style="background-color: #ADD8E6">
                <span>Last</span>
            </li>
        @else
            <a href="{{ $paginator->toArray()['last_page_url'] }}" class="text-light">
                <li class="badge badge-primary text-light p-2">
                    Last
                </li>
            </a>
        @endif

    </ul>

@endif
