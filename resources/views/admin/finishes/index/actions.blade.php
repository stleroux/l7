@if(!$finish->deleted_at)
   @include('admin.actions.grid.edit', ['modelName'=>'finish', 'model'=>$finish])
   @include('admin.actions.grid.destroy', ['modelName'=>'finish', 'model'=>$finish])
@endif

@if($finish->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'finish', 'model'=>$finish])
   @include('admin.actions.grid.delete', ['modelName'=>'finish', 'model'=>$finish])
@endif
