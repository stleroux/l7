@if(!$material->deleted_at)

   @include('admin.actions.grid.edit', ['modelName'=>'material', 'model'=>$material])
   @include('admin.actions.grid.destroy', ['modelName'=>'material', 'model'=>$material])

@endif

@if($material->deleted_at)

   @can('material-manage')
      @include('admin.actions.grid.restore', ['modelName'=>'material', 'model'=>$material])
      @include('admin.actions.grid.delete', ['modelName'=>'material', 'model'=>$material])
   @endcan

@endif
