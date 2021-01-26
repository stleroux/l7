@can('role-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $role->id }}"
      data-url="{{ url('admin/roles', $role->id) }}"
      title="Trash Role">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
