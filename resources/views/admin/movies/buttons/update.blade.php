@if(checkPerm('movie_edit', $movie))
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      type="submit"
      title="Update Movie">
      <i class="{{ config('buttons.update') }}"></i>
   </button>
@endif
