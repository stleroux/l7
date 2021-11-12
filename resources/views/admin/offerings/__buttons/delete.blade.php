@if(checkPerm('project_delete'))
   <a href="{{ route('admin.projects.delete', $project->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger text-light"
      title="Delete Project">
      <i class="{{ config('icons.delete') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
