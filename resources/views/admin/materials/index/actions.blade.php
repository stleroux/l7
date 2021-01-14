
      @if(!$material->deleted_at)
         @can('material-edit')
            <a href="{{ route('admin.materials.edit', $material) }}" class="btn btn-sm btn-default" title="Edit Material">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('material-delete')
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $material->id }}"
               data-url="{{ url('admin/materials', $material) }}"
               title="Trash Material"
               >
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endcan
      @endif

      @if($material->deleted_at)
         @can('material-manage')

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $material->id }}"
               data-url="{{ url('admin/materials/restore', $material) }}"
               title="Restore Project">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $material->id }}"
               data-url="{{ url('admin/materials/delete', $material) }}"
               title="Permanently Delete Material"
               >
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif
