@can('material-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $material->id }}"
      data-url="{{ url('admin/materials', $material->id) }}"
      title="Trash Material">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
