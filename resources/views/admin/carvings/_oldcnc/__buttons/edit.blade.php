@if(checkPerm('project_edit', $project))
   <a href="{{ route('admin.projects.edit', $project->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      title="Edit Woodproject">
      <i class="{{ config('icons.edit') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
