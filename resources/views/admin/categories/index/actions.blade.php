<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $category->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="fa fa-ellipsis-v"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $category->id }}">
      @if(!$category->deleted_at)
         @can('category-edit')
            <a href="{{ route('admin.categories.edit', $category) }}" class="dropdown-item bg-light">
               <i class="fa fa-user text-primary nav-item"></i>
               Edit
            </a>
         @endcan

         @can('category-delete')
            <button type="button"
               class="dropdown-item destroy-category bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $category->id }}"
               data-url="{{ url('admin/categories', $category->id) }}"
               >
               <i class="fa fa-trash text-pink nav-item"></i>
               Trash
            </button>
         @endcan
      @endif

      @if($category->deleted_at)
         @can('category-manage')
            <h4 class="dropdown-header">Admin Functions</h4>
            <button type="button"
               class="dropdown-item restore-category bg-light"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $category->id }}"
               data-url="{{ url('admin/categories/restore', $category->id) }}"
               >
               <i class="fas fa-trash-restore text-primary nav-item"></i>
               Restore
            </button>
            <button type="button"
               class="dropdown-item delete-category bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $category->id }}"
               data-url="{{ url('admin/categories/delete', $category->id) }}"
               >
               <i class="fa fa-trash-alt text-danger nav-item"></i>
               Delete Permanently
            </button>
         @endcan
      @endif

   </div>
</div>