@if(!$role->deleted_at)

   @include('admin.actions.grid.edit', ['modelName'=>'role', 'model'=>$role])
   @include('admin.actions.grid.addAllPerms', ['modelName'=>'role', 'model'=>$role])
   @if($role->name != 'admin')
      @include('admin.actions.grid.removeAllPerms', ['modelName'=>'role', 'model'=>$role])
      @include('admin.actions.grid.destroy', ['modelName'=>'role', 'model'=>$role])
   @endif

@endif

@if($role->deleted_at)

   @can('role-manage')
      @include('admin.actions.grid.restore', ['modelName'=>'role', 'model'=>$role])
      @include('admin.actions.grid.delete', ['modelName'=>'role', 'model'=>$role])
   @endcan

@endif
