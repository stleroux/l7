<button type="button"
     class="restore-model btn btn-sm btn-default"
     data-toggle="modal"
     data-target="#restoreModal"
     data-id="{{ $category->id }}"
     data-url="{{ url('admin/categories/restore', $category) }}"
     title="Restore Category"
     >
     <i class="{{ config('icons.restore') }} text-primary"></i>
     {{-- Restore --}}
</button>
