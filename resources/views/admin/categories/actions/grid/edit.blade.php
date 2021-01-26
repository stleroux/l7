@can('category-edit')
   <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-default" title="Edit Category">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      {{-- Edit --}}
   </a>
@endcan
