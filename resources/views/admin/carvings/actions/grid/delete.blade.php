@can('carving-manage')
   <!-- CANNOT use a link here, must use a button -->
   <button type="button"
      class="delete-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#deleteModal"
      data-id="{{ $carving->id }}"
      data-url="{{ url('admin/carvings/delete', $carving->id) }}"
      title="Permanently Delete Carving">
      <i class="{{ config('icons.delete') }} text-danger"></i>
      {{-- Delete Permanently --}}
   </button>
@endcan
