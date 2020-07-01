<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $project->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="fa fa-ellipsis-v px-3"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $project->id }}">
      @if(!$project->deleted_at)
         @can('role-edit')
            <a href="{{ route('admin.projects.edit', $project) }}" class="dropdown-item bg-light">
               <i class="fa fa-user text-primary nav-item"></i>
               Edit
            </a>
         @endcan

         @can('role-delete')
            <button type="button"
               class="dropdown-item destroy-role bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects', $project->id) }}"
               >
               <i class="fa fa-trash text-danger nav-item"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($project->deleted_at)
         @can('role-manage')
            <h4 class="dropdown-header">Admin Functions</h4>
            <button type="button"
               class="dropdown-item restore-role bg-light"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/restore', $project) }}"
               >
               <i class="fas fa-trash-restore text-primary nav-item"></i>
               Restore
            </button>
            <button type="button"
               class="dropdown-item delete-role bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/delete', $project->id) }}"
               >
               <i class="fa fa-trash text-danger nav-item"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>