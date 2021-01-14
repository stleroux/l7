@if(checkPerm('movie_delete'))
   <button
      class="btn {{ $size ? 'btn-.$size' : '' }} btn-danger text-light"
      type="submit"
      title="Delete Movie">
      <i class="{{ config('buttons.trash') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
@endif