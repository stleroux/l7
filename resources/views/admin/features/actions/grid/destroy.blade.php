@can('feature-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $feature->id }}"
      data-url="{{ url('admin/features', $feature->id) }}"
      title="Trash Feature">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
