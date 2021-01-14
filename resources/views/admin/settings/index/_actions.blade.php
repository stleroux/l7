{{-- <div class="dropdown text-center">

   <a class="dropdown-button"
      id="dropdown-menu-{{ $role->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ config('icons.ellipsis') }}"></i>
   </a>

   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $role->id }}">

      @if(!$role->deleted_at)

         @can('role-edit')
            <a href="{{ route('admin.roles.edit', $role) }}" class="dropdown-item bg-light">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               Edit
            </a>
         @endcan

         @can('role-delete')
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $role->id }}"
               data-url="{{ url('admin/roles', $role->id) }}">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               Trash
            </a>
         @endcan

         @can('role-manage')
            <a href="{{ route('admin.roles.addAllPerms', $role) }}" class="dropdown-item bg-light">
               <i class="{{ config('icons.permissions') }} text-primary"></i>
               Add All Permissions
            </a>

            <a href="{{ route('admin.roles.removeAllPerms', $role) }}" class="dropdown-item bg-light">
               <i class="{{ config('icons.permissions') }} text-danger"></i>
               Remove All Permissions
            </a>
         @endcan

      @endif

      @if($role->deleted_at)

         @can('role-manage')

            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.roles.restore', $role) }}" class="dropdown-item bg-light">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $role->id }}"
               data-url="{{ url('admin/roles/delete', $role->id) }}">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         
         @endcan

      @endif

   </div>

</div>
 --}}




      @if(!$role->deleted_at)

         @can('role-edit')
            <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-default" title="Edit Role">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('role-manage')
            <a href="{{ route('admin.roles.addAllPerms', $role) }}" class="btn btn-sm btn-default" title="Add All Permissions">
               <i class="{{ config('icons.permissions') }} text-primary"></i>
               {{-- Add All Permissions --}}
            </a>

            <a href="{{ route('admin.roles.removeAllPerms', $role) }}" class="btn btn-sm btn-default" title="Remove All Permissions">
               <i class="{{ config('icons.permissions') }} text-danger"></i>
               {{-- Remove All Permissions --}}
            </a>
         @endcan

         @can('role-delete')
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $role->id }}"
               data-url="{{ url('admin/roles', $role) }}"
               title="Trash Role">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </a>
         @endcan

      @endif

      @if($role->deleted_at)

         @can('role-manage')

            {{-- <h4 class="dropdown-header">Admin Functions</h4> --}}

            {{-- <a href="{{ route('admin.roles.restore', $role) }}" class="btn btn-sm btn-default" title="Restore Role">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               Restore
            </a> --}}

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $role->id }}"
               data-url="{{ url('admin/roles/restore', $role) }}"
               title="Restore Role"
               >
               <i class="{{ config('icons.restore') }}"></i>
               {{-- Restore --}}
            </button>
            
            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $role->id }}"
               data-url="{{ url('admin/roles/delete', $role) }}"
               title="Permanently Delete Role">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         
         @endcan

      @endif