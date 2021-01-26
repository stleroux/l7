@can('project-edit')
   <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
