
      @if(!$finish->deleted_at)
         @can('finish-edit')
            <a href="{{ route('admin.finishes.edit', $finish) }}" class="btn btn-sm btn-default" title="Edit Finish">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('finish-delete')
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $finish->id }}"
               data-url="{{ url('admin/finishes', $finish) }}"
               title="Trash Finish"
               >
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endcan
      @endif

      @if($finish->deleted_at)
         @can('finish-manage')
            {{-- <h4 class="dropdown-header">Admin Functions</h4> --}}

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $finish->id }}"
               data-url="{{ url('admin/finishes/restore', $finish) }}"
               title="Restore Project">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $finish->id }}"
               data-url="{{ url('admin/finishes/delete', $finish) }}"
               title="Permanently Delete Finish"
               >
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif
