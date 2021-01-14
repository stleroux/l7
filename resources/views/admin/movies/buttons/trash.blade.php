{{-- @if(checkPerm('movie_delete', $movie)) --}}
   <a href="{{ route('admin.movies.trash', $movie->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger text-light"
      title="Trash Movie">
      <i class="{{ config('buttons.trash') }}"></i>
   </a>
{{-- @endif --}}
