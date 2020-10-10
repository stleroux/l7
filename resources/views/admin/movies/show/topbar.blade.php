<div class="row">

	<div class="col-xl-2 mb-2">		
		<a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-primary">All Movies</a>
	</div>

	<div class="col-xl-8 mb-2 text-center">
		@include('admin.movies.buttons.previous', ['size'=>'sm', 'btn_label'=>'Previous', $previous])
		@include('admin.movies.buttons.next', ['size'=>'sm', 'btn_label'=>'Next', $next])
	</div>

	<div class="col-xl-2 mb-2 text-right">
		<a href="javascript:history.back()" class="btn btn-sm btn-primary">Previous Page</a>
	</div>

</div>

		{{-- @include('movies.buttons.print', ['size'=>'sm', 'btn_label'=>'Print']) --}}
		{{-- @include('movies.buttons.printPDF', ['size'=>'sm', 'btn_label'=>'Print PDF']) --}}
		{{-- @include('movies.buttons.favorite', ['size'=>'sm', 'btn_label'=>'Favorite']) --}}