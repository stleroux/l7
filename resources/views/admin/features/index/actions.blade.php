@if(!$feature->deleted_at)
   @include('admin.actions.grid.edit', ['modelName'=>'feature', 'model'=>$feature])
   {{-- @include('admin.actions.grid.resetViews', ['modelName'=>'feature', 'model'=>$feature]) --}}
   @include('admin.actions.grid.destroy', ['modelName'=>'feature', 'model'=>$feature])
@endif

@if($feature->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'feature', 'model'=>$feature])
   @include('admin.actions.grid.delete', ['modelName'=>'feature', 'model'=>$feature])
@endif