@if(checkPerm('project_edit'))
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      type="submit"
      title="Update Material">
      <i class="{{ config('icons.update') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
@endif
