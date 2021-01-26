@if(!$carving->deleted_at)
   @include('admin.carvings.actions.grid.edit')
   @include('admin.carvings.actions.grid.resetViews')
   @include('admin.carvings.actions.grid.destroy')
@endif

@if($carving->deleted_at)
   @include('admin.carvings.actions.grid.restore')
   @include('admin.carvings.actions.grid.delete')
@endif
