<div class="dropdown text-center">

   <a class="dropdown-button"
      id="dropdown-menu-{{ $role->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>

   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $role->id }}">

      @if(!$role->deleted_at)

         @can('role-edit')
            <a href="{{ route('admin.roles.edit', $role) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
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
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </a>
         @endcan

         @can('role-manage')
            <a href="{{ route('admin.roles.addAllPerms', $role) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.permissions') }} text-primary"></i>
               Add All Permissions
            </a>

            <a href="{{ route('admin.roles.removeAllPerms', $role) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.permissions') }} text-danger"></i>
               Remove All Permissions
            </a>
         @endcan

      @endif

      @if($role->deleted_at)

         @can('role-manage')

            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.roles.restore', $role) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
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
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         
         @endcan

      @endif

   </div>

</div>
