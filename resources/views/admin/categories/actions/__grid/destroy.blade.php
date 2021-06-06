@can('category-delete')
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $category->id }}"
      data-url="{{ url('admin/categories', $category) }}"
      title="Trash Category"
      >
      <i class="{{ config('icons.trash') }} text-pink"></i>
      {{-- Trash --}}
   </button>
@endcan
