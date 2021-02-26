@can('finish-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $finish->id }}"
      data-url="{{ url('admin/finishes', $finish->id) }}"
      title="Trash Finish">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
