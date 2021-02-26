@if(!$carving->deleted_at)
   @include('admin.actions.grid.edit', ['modelName'=>'carving', 'model'=>$carving])
   @include('admin.actions.grid.resetViews', ['modelName'=>'carving', 'model'=>$carving])
   @include('admin.actions.grid.destroy', ['modelName'=>'carving', 'model'=>$carving])
@endif

@if($carving->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'carving', 'model'=>$carving])
   @include('admin.actions.grid.delete', ['modelName'=>'carving', 'model'=>$carving])
@endif
