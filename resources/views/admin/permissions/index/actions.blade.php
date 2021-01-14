      
      @if(!$permission->deleted_at)
         
         @can('permission-edit')
            
            <a href="{{ route('admin.permissions.edit', $permission) }}"
               class="btn btn-sm btn-default"
               title="Edit Permission"
            >
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>

         @endcan

         @can('permission-delete')

            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $permission->id }}"
               data-url="{{ url('admin/permissions', $permission) }}"
               title="Trash Permission"
               >
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>

         @endcan

      @endif

      @if($permission->deleted_at)

         @can('permission-manage')

            {{-- <a href="{{ route('admin.permissions.restore', $permission) }}" class="btn btn-sm btn-default" title="Restore">
               <i class="{{ config('icons.restore') }} text-primary"></i>
            </a> --}}

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $permission->id }}"
               data-url="{{ url('admin/permissions/restore', $permission) }}"
               title="Restore Permission"
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
               data-id="{{ $permission->id }}"
               data-url="{{ url('admin/permissions/delete', $permission) }}"
               title="Delete Permanently"
               >
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         
         @endcan

      @endif
   </div>

</div>