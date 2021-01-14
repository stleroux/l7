      @if(!$category->deleted_at)
         @can('category-edit')
            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-default" title="Edit Category">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

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
      @endif

      @if($category->deleted_at)
         @can('category-manage')
            {{-- <h4 class="dropdown-header">Admin Functions</h4> --}}
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
         @endcan
      @endif
