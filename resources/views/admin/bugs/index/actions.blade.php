@if(!$bug->deleted_at)

   @can('bug-edit')
      <a href="{{ route('admin.bugs.edit', $bug) }}" class="btn btn-sm btn-default" title="Edit Bug">
         <i class="{{ config('icons.edit') }} text-primary"></i>
         {{-- Edit --}}
      </a>
   @endcan

   @can('bug-delete')
      <a href="#"
         class="destroy-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#destroyModal"
         data-id="{{ $bug->id }}"
         data-url="{{ url('admin/bugs', $bug->id) }}"
         title="Trash Bug">
         <i class="{{ config('icons.trash') }} text-pink"></i>
         {{-- Trash --}}
      </a>
   @endcan

@endif

@if($bug->deleted_at)

   @can('bug-manage')

      {{-- <a href="{{ route('admin.bugs.restore', $bug) }}" class="btn btn-sm btn-default" title="Restore Bug">
         <i class="{{ config('icons.restore') }} text-primary"></i>
         Restore
      </a> --}}
      <button type="button"
         class="restore-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#restoreModal"
         data-id="{{ $bug->id }}"
         data-url="{{ url('admin/bugs/restore', $bug) }}"
         title="Restore Bug"
         >
         <i class="{{ config('icons.restore') }} text-primary"></i>
         {{-- Restore --}}
      </button>

      <!-- CANNOT use a link here, must use a button -->
      <button
         type="button"
         class="delete-model btn btn-sm btn-default"
         data-toggle="modal"
         data-target="#deleteModal"
         data-id="{{ $bug->id }}"
         data-url="{{ url('admin/bugs/delete', $bug->id) }}"
         title="Delete Bug Permanently">
         <i class="{{ config('icons.delete') }} text-danger"></i>
         {{-- Delete Permanently --}}
      </button>
   
   @endcan

@endif
