@if(!$feature->deleted_at)

   @can('bug-edit')
      <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-sm btn-default" title="Edit Fature">
         <i class="{{ config('icons.edit') }} text-primary"></i>
         {{-- Edit --}}
      </a>
   @endcan

   @can('bug-delete')
      <a href="#"
         class="destroy-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#destroyModal"
         data-id="{{ $feature->id }}"
         data-url="{{ url('admin/features', $feature->id) }}"
         title="Trash Feature">
         <i class="{{ config('icons.trash') }} text-pink"></i>
         {{-- Trash --}}
      </a>
   @endcan

@endif

@if($feature->deleted_at)

   @can('bug-manage')

      <button type="button"
         class="restore-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#restoreModal"
         data-id="{{ $feature->id }}"
         data-url="{{ url('admin/features/restore', $feature) }}"
         title="Restore Feature">
         <i class="{{ config('icons.restore') }} text-primary"></i>
         {{-- Restore --}}
      </button>

      <!-- CANNOT use a link here, must use a button -->
      <button
         type="button"
         class="delete-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#deleteModal"
         data-id="{{ $feature->id }}"
         data-url="{{ url('admin/features/delete', $feature->id) }}"
         title="Permanently Delete Feature">
         <i class="{{ config('icons.delete') }} text-danger"></i>
         {{-- Delete Permanently --}}
      </button>
   
   @endcan

@endif
