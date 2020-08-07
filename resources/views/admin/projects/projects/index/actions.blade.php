<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $project->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $project->id }}">
      @if(!$project->deleted_at)
         @can('project-edit')
            <a href="{{ route('admin.projects.edit', $project) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         @endcan

         @can('project-delete')
            <button type="button"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects', $project->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($project->deleted_at)
         @can('project-manage')
            <h4 class="dropdown-header">Admin Functions</h4>
{{--             <button type="button"
               class="dropdown-item restore-model bg-light"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/restore', $project) }}">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </button> --}}
            <a href="{{ route('admin.projects.restore', $project) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/delete', $project->id) }}">
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>
