@if(!$project->deleted_at)
   @include('admin.actions.grid.edit', ['modelName'=>'project', 'model'=>$project])
   @include('admin.actions.grid.resetViews', ['modelName'=>'project', 'model'=>$project])
   @include('admin.actions.grid.destroy', ['modelName'=>'project', 'model'=>$project])
@endif

@if($project->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'project', 'model'=>$project])
   @include('admin.actions.grid.delete', ['modelName'=>'project', 'model'=>$project])
@endif
