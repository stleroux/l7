@can('recipe-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $recipe->id }}"
      data-url="{{ url('admin/recipes', $recipe->id) }}"
      title="Trash Recipe">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
