<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $finish->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $finish->id }}">
      @if(!$finish->deleted_at)
         @can('project_finishes-edit')
            <a href="{{ route('admin.projects.finishes.edit', $finish) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         @endcan

         @can('project_finishes-delete')
            <button type="button"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $finish->id }}"
               data-url="{{ url('admin/projects/finishes', $finish) }}"
               >
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($finish->deleted_at)
         @can('project_finishes-manage')
            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.projects.finishes.restore', $finish) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $finish->id }}"
               data-url="{{ url('admin/projects/finishes/delete', $finish) }}"
               >
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>