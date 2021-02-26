@can('post-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $post->id }}"
      data-url="{{ url('admin/posts', $post->id) }}"
      title="Trash Post">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
