@if(checkPerm('project_add'))
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      type="submit"
      title="Save Material">
      <i class="{{ config('icons.save') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
@endif
