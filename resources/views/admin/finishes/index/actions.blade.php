@if(!$finish->deleted_at)
   @include('admin.finishes.actions.grid.edit')
   @include('admin.finishes.actions.grid.destroy')
@endif

@if($finish->deleted_at)
   @include('admin.finishes.actions.grid.restore')
   @include('admin.finishes.actions.grid.delete')
@endif
