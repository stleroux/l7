@if(!$tag->deleted_at)

   @include('admin.actions.grid.edit', ['modelName'=>'tag', 'model'=>$tag])
   @include('admin.actions.grid.destroy', ['modelName'=>'tag', 'model'=>$tag])

@endif

@if($tag->deleted_at)

   @include('admin.actions.grid.restore', ['modelName'=>'tag', 'model'=>$tag])
   @include('admin.actions.grid.delete', ['modelName'=>'tag', 'model'=>$tag])

@endif
