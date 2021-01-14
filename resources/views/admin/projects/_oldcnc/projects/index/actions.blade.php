      @if(!$project->deleted_at)
         @can('project-edit')
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-default" title="Edit Project">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('project-manage')
            <button type="button"
               class="resetViews-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#resetViewsModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/resetViews', $project) }}"
               title="Reset Project Views"
               >
               <i class="{{ config('icons.resetViews') }} text-secondary"></i>
               {{-- Reset Views --}}
            </button>
         @endcan

         @can('project-delete')
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects', $project->id) }}"
               title="Trash Project">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endcan
      @endif

      @if($project->deleted_at)
         @can('project-manage')
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/restore', $project) }}"
               title="Restore Project">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $project->id }}"
               data-url="{{ url('admin/projects/delete', $project->id) }}"
               title="Permanently Delete Project">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif

   </div>
</div>
