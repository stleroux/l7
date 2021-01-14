{{-- @if(checkPerm('movie_edit', $movie)) --}}
   <a href="{{ route('admin.movies.edit', $movie->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      title="Edit Movie">
      <i class="{{ config('buttons.edit') }}"></i>
      Edit
   </a>
{{-- @endif --}}