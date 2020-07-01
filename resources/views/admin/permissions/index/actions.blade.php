<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $permission->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="fa fa-ellipsis-v"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $permission->id }}">
      @if(!$permission->deleted_at)
         @can('permission-edit')
            <a href="{{ route('admin.permissions.edit', $permission) }}" class="dropdown-item bg-light">
               <i class="fa fa-user text-primary nav-item"></i>
               Edit
            </a>
         @endcan

         @can('permission-delete')
            <button type="button"
               class="dropdown-item destroy-permission bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $permission->id }}"
               data-url="{{ url('admin/permissions', $permission->id) }}"
               >
               <i class="fa fa-trash text-danger nav-item"></i>
               Delete
            </button>
         @endcan
      @endif
   </div>
</div>