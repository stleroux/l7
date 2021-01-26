<button type="button"
     class="delete-model btn btn-sm btn-default"
     data-toggle="modal"
     data-target="#deleteModal"
     data-id="{{ $category->id }}"
     data-url="{{ url('admin/categories/delete', $category) }}"
     title="Permanently Delete Category"
     >
     <i class="{{ config('icons.delete') }} text-danger"></i>
     {{-- Delete Permanently --}}
</button>
