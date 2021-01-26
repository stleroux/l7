@can('carving-manage')
   <button type="button"
      class="restore-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#restoreModal"
      data-id="{{ $carving->id }}"
      data-url="{{ url('admin/carvings/restore', $carving) }}"
      title="Restore Carving">
      <i class="{{ config('icons.restore') }} text-primary"></i>
      {{-- Restore --}}
   </button>
@endcan
