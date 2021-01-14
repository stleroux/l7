@if(checkPerm('project_add'))
   <a href="{{ route('admin.projects.create') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-success text-light"
      title="Add Project">
      <i class="{{ config('icons.add') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
