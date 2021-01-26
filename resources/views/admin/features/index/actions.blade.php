@if(!$feature->deleted_at)
   @include('admin.features.actions.grid.edit')
   @include('admin.features.actions.grid.destroy')
@endif

@if($feature->deleted_at)
   @include('admin.features.actions.grid.restore')
   @include('admin.features.actions.grid.delete')
@endif
