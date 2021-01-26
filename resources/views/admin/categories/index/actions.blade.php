@if(!$category->deleted_at)
   @include('admin.categories.actions.grid.edit')
   @include('admin.categories.actions.grid.destroy')
@endif

@if($category->deleted_at)
   @can('category-manage')
      @include('admin.categories.actions.grid.restore')
      @include('admin.categories.actions.grid.delete')            
   @endcan
@endif
