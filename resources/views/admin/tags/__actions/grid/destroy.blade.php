@can('tag-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $tag->id }}"
      data-url="{{ url('admin/tags', $tag->id) }}"
      title="Trash Tag">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
