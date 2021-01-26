@can('project-edit')
   <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-default" title="Edit Project">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
