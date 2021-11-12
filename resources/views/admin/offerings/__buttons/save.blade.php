@if(checkPerm('project_add'))
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      type="submit"
      title="Save Woodproject">
      <i class="{{ config('icons.save') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
@endif
