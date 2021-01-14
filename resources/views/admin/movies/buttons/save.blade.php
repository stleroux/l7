@can('movie-add')
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      type="submit"
      title="Save Movie">
      <i class="{{ config('buttons.save') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
@endcan
