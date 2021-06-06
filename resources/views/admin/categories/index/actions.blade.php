@if(!$category->deleted_at)
   {{-- @include('admin.categories.actions.grid.edit') --}}
   {{-- @include('admin.categories.actions.grid.destroy') --}}
   @include('admin.actions.grid.edit', ['modelName'=>'category', 'model'=>$category])
   @include('admin.actions.grid.destroy', ['modelName'=>'category', 'model'=>$category])
@endif

@if($category->deleted_at)
   @can('category-manage')
      {{-- @include('admin.categories.actions.grid.restore') --}}
      {{-- @include('admin.categories.actions.grid.delete') --}}
      @include('admin.actions.grid.restore', ['modelName'=>'category', 'model'=>$category])
      @include('admin.actions.grid.delete', ['modelName'=>'category', 'model'=>$category])
   @endcan
@endif
