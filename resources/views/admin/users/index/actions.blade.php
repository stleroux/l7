<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $user->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="fa fa-ellipsis-v"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $user->id }}">
      @if(!$user->deleted_at)
         @can('user-edit')
            <a href="{{ route('admin.users.edit', $user) }}" class="dropdown-item bg-light">
               <i class="fa fa-user text-primary nav-item"></i>
               Edit
            </a>
         @endcan

         @can('user-delete')
            <button type="button"
               class="dropdown-item destroy-user bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $user->id }}"
               data-url="{{ url('admin/users', $user->id) }}"
               >
               <i class="fa fa-trash text-pink nav-item"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($user->deleted_at)
         @can('user-manage')
            <h4 class="dropdown-header">Admin Functions</h4>
            <button type="button"
               class="dropdown-item restore-user bg-light"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $user->id }}"
               data-url="{{ url('admin/users/restore', $user->id) }}"
               >
               <i class="fas fa-trash-restore text-primary nav-item"></i>
               Restore
            </button>
            <button type="button"
               class="dropdown-item delete-user bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $user->id }}"
               data-url="{{ url('admin/users/delete', $user->id) }}"
               >
               <i class="fa fa-trash-alt text-danger nav-item"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>