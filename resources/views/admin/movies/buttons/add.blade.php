{{-- @if(checkPerm('movie_create')) --}}
   <a href="{{ route('admin.movies.create') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      title="Add Movie">
      <i class="{{ config('icons.add') }}"></i>
      Add Movie
   </a>
{{-- @endif --}}
