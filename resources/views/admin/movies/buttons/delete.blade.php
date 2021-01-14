@if(checkPerm('movie_delete'))
   <a href="{{ route('admin.movies.delete', $movie->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger text-light"
      title="Delete Movie">
      <i class="{{ config('buttons.delete') }}"></i>
   </a>
@endif
