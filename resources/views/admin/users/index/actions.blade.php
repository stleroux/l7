<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $user->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $user->id }}">
      @if(!$user->deleted_at)

         @can('user-edit')
            @if($user->account_status)
               <a href="{{ route('admin.users.disable', $user) }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.disable') }} text-pink"></i>
                  Disable
               </a>
            @else
               <a href="{{ route('admin.users.approve', $user) }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.approve') }} text-primary"></i>
                  Approve
               </a>
            @endif
         @endcan

         @can('user-edit')
            <a href="{{ route('admin.users.edit', $user) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         @endcan

         @can('user-delete')
            <button type="button"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $user->id }}"
               data-url="{{ url('admin/users', $user->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($user->deleted_at)
         @can('user-manage')
            <h4 class="dropdown-header">Admin Functions</h4>
            
            <a href="{{ route('admin.users.restore', $user) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $user->id }}"
               data-url="{{ url('admin/users/delete', $user->id) }}">
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>