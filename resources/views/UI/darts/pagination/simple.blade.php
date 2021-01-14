@if ($paginator->hasPages())
	<nav class="bg-info float-right m-0 p-0">
		<ul class="pagination p-0 m-0">

			{{-- First Page Link --}}
			@if ($paginator->onFirstPage())
				<li class="page-item disabled">
					<span class="page-link">First</span>
				</li>
			@else
				<li class="page-item">
					<a href="{{ $paginator->toArray()['first_page_url'] }}">
						<span class="page-link">First</span>
					</a>
				</li>
			@endif

			{{-- Previous Page Link --}}
			@if ($paginator->onFirstPage())
				<li class="page-item disabled">
					<span class="page-link">@lang('pagination.previous')</span>
				</li>
			@else
				<li class="page-item">
					<a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
				</li>
			@endif

			{{-- Dropdown with pages --}}
			<select class="form-control page-link col-xl-2" onchange="location = this.options[this.selectedIndex].value;">
				@for ($i = 1; $i <= $paginator->lastPage(); $i++)
					<option value="?page={{ $i }}" {{ ($paginator->currentPage() == $i) ? 'selected' : '' }} class="text-dark">{{ $i }}</option>
				@endfor
			</select>

			{{-- Next Page Link --}}
			@if ($paginator->hasMorePages())
				<li class="page-item">
					<a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
				</li>
			@else
				<li class="page-item disabled" aria-disabled="true">
					<span class="page-link">@lang('pagination.next')</span>
				</li>
			@endif

			{{-- Last Page Link --}}
			@if ($paginator->lastPage() == $paginator->currentPage())
				<li class="page-item disabled">
					<span class="page-link">Last</span>
				</li>
			@else
				<li class="page-item">
					<a href="{{ $paginator->toArray()['last_page_url'] }}">
						<span class="page-link">Last</span>
					</a>
				</li>
			@endif
		</ul>
	</nav>
@endif
