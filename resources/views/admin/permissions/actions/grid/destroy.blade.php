@can('permission-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $permission->id }}"
      data-url="{{ url('admin/permissions', $permission->id) }}"
      title="Trash Permission">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
