@can('user-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $user->id }}"
      data-url="{{ url('admin/users', $user->id) }}"
      title="Trash User">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
