<div class="card mb-3 p-0 m-0">

	<div class="card-header block_header p-2 m-0">
		<i class="{{ config('buttons.movies') }}"></i>
		Movies Menu
		</div>

	<div class="list-group">

		<a href="{{ route('admin.movies.index') }}" class="list-group-item list-group-item-action p-1
			{{ Route::is('admin.movies.index') ? 'active' : '' }}">
			<i class="{{ config('buttons.movies') }}"></i>
			Movies
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::published()->count() }}
			</div>
		</a>

		<a href="{{ route('admin.movies.newMovies') }}" class="list-group-item list-group-item-action p-1 
			{{ Route::is('admin.movies.newMovies') ? 'active' : '' }}">
			<i class="{{ config('buttons.new') }}"></i>
			New Movies
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::newMovies()->count() }}
			</div>
		</a>

{{-- 		<a href="{{ route('admin.movies.myMovies') }}" class="list-group-item list-group-item-action p-1
			{{ Route::is('admin.movies.myMovies') ? 'active' : '' }}">
			<i class="{{ config('buttons.mine') }}"></i>
			Created By Me
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::myMovies()->count() }}
			</div>
		</a> --}}

		<a href="{{ route('admin.movies.unpublished') }}" class="list-group-item list-group-item-action p-1
			{{ Route::is('admin.movies.unpublished') ? 'active' : '' }}">
			<i class="{{ config('buttons.unpublished') }}"></i>
			Unpublished
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::unpublished()->count() }}
			</div>
		</a>

		<a href="{{ route('admin.movies.future') }}" class="list-group-item list-group-item-action p-1
			{{ Route::is('admin.movies.future') ? 'active' : '' }}">
			<i class="{{ config('buttons.future') }}"></i>
			Future
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::future()->count() }}
			</div>
		</a>

		<a href="{{ route('admin.movies.trashed') }}" class="list-group-item list-group-item-action p-1
			{{ Route::is('admin.movies.trashed') ? 'active' : '' }}">
			<i class="{{ config('buttons.trashed') }}"></i>
			Trashed
			<div class="badge badge-secondary float-right">
				{{ App\Models\Movie::trashedCount()->count() }}
			</div>
		</a>
	</div>
</div>
