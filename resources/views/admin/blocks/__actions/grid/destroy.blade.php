@can('bug-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $bug->id }}"
      data-url="{{ url('admin/bugs', $bug->id) }}"
      title="Trash Bug">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
