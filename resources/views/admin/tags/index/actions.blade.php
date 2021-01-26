@if(!$tag->deleted_at)

   @include('admin.tags.actions.grid.edit')
   @include('admin.tags.actions.grid.destroy')

@endif

@if($tag->deleted_at)

   @include('admin.tags.actions.grid.restore')
   @include('admin.tags.actions.grid.delete')

@endif
