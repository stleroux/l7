<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'role'])

      @if(Route::currentRouteName() == 'admin.roles.index')
         @include('admin.actions.mass.destroy', ['modelName'=>'role'])
      @endif

      @if(Route::currentRouteName() == 'admin.roles.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'role'])
         @include('admin.actions.mass.delete', ['modelName'=>'role'])
      @endif
      
   </div>

</div>
