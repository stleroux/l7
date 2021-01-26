@can('project-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $project->id }}"
      data-url="{{ url('admin/projects', $project->id) }}"
      title="Trash Project">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
