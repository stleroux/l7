@if ($paginator->hasPages())

	<ul class="pagination" role="navigation">

		{{-- First Page Link --}}
		@if ($paginator->onFirstPage())
			<li class="disabled badge badge-primary p-2 mr-1" style="background-color: #ADD8E6">
				<span>First</span>
			</li>
		@else
			<a href="{{ $paginator->toArray()['first_page_url'] }}" class="text-light">
				<li class="badge badge-primary text-light p-2 mr-1">
					First
				</li>
			</a>
		@endif

		{{-- Previous Page Link --}}
{{-- 		@if ($paginator->onFirstPage())
			<li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
				<span class="page-link" aria-hidden="true">&lsaquo;</span>
			</li>
		@else
			<li class="page-item">
				<a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
			</li>
		@endif --}}
      @if ($paginator->onFirstPage())
         <li class="disabled badge badge-primary p-2 mr-1" style="background-color: #ADD8E6">
            <span>Previous</span>
         </li>
      @else
         <a href="{{ $paginator->previousPageUrl() }}" class="text-light" rel="prev">
            <li class="badge badge-primary text-light p-2 mr-1">
               Previous
            </li>
         </a>
      @endif

		<?php
			$start = $paginator->currentPage() - 2; // show 3 pagination links before current
			$end = $paginator->currentPage() + 2; // show 3 pagination links after current
			if($start < 1) {
				$start = 1; // reset start to 1
				$end += 1;
			} 
			if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
		?>

		@if($start > 1)
			<li class="">
				<a class="badge badge-primary p-2 mr-1" href="{{ $paginator->url(1) }}">{{1}}</a>
			</li>
			@if($paginator->currentPage() != 4)
				{{-- "Three Dots" Separator --}}
				<li class="disabled" aria-disabled="true">
               <span class="badge badge-primary p-2 mr-1">...</span>
            </li>
			@endif
		@endif

		@for ($i = $start; $i <= $end; $i++)
			<li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
				<a class="badge badge-{{ ($paginator->currentPage() == $i) ? 'info' : 'primary' }} p-2 mr-1" href="{{ $paginator->url($i) }}">{{$i}}</a>
			</li>
		@endfor
		
		@if($end < $paginator->lastPage())
			@if($paginator->currentPage() + 3 != $paginator->lastPage())
				{{-- "Three Dots" Separator --}}
				<li class="disabled" aria-disabled="true">
               <span class="badge badge-primary p-2 mr-1">...</span>
            </li>
			@endif
			<li class="">
				<a class="badge badge-primary p-2 mr-1" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
			</li>
		@endif

		{{-- Next Page Link --}}
{{-- 		@if ($paginator->hasMorePages())
			<li class="page-item">
				<a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
			</li>
		@else
			<li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
				<span class="page-link" aria-hidden="true">&rsaquo;</span>
			</li>
		@endif --}}

       @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="text-light" rel="next">
                <li class="badge badge-primary p-2 mr-1">
                    Next
                </li>
            </a>
        @else
            <li class="disabled badge badge-primary p-2 mr-1" style="background-color: #ADD8E6">
                <span>Next</span>
            </li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->lastPage() == $paginator->currentPage())
            <li class="disabled badge badge-primary p-2 mr-1" style="background-color: #ADD8E6">
                <span>Last</span>
            </li>
        @else
            <a href="{{ $paginator->toArray()['last_page_url'] }}" class="text-light">
                <li class="badge badge-primary text-light p-2 mr-1">
                    Last
                </li>
            </a>
        @endif

	</ul>

@endif