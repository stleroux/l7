@can('carving-delete')
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $carving->id }}"
      data-url="{{ url('admin/carvings', $carving->id) }}"
      title="Trash Carving">
      <i class="{{ config('icons.trash') }} text-pink"></i>
      {{-- Trash --}}
   </button>
@endcan
