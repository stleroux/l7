@if(checkPerm('project_add'))
   <a href="{{ route('admin.projects.materials.create') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      title="Add Material">
      <i class="{{ config('icons.add') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
