@if(!$user->deleted_at)
   
   @include('admin.actions.grid.showProfile', ['modelName'=>'user', 'model'=>$user])
   @include('admin.actions.grid.showUser', ['modelName'=>'user', 'model'=>$user])
   @include('admin.actions.grid.edit', ['modelName'=>'user', 'model'=>$user])

   @if($user->username != 'admin')
      @if($user->account_status)
         @include('admin.actions.grid.disable', ['modelName'=>'user', 'model'=>$user])
      @else
         @include('admin.actions.grid.enable', ['modelName'=>'user', 'model'=>$user])
      @endif
      
      @include('admin.actions.grid.destroy', ['modelName'=>'user', 'model'=>$user])
   @endif

@endif

@if($user->deleted_at)

   @can('user-manage')
      @include('admin.actions.grid.restore', ['modelName'=>'user', 'model'=>$user])
      @include('admin.actions.grid.delete', ['modelName'=>'user', 'model'=>$user])
   @endcan

@endif
