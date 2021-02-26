<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'carving'])
      
      @if(Route::currentRouteName() == 'admin.carvings.index')
         @include('admin.actions.mass.resetViews', ['modelName'=>'carving'])
         @include('admin.actions.mass.destroy', ['modelName'=>'carving'])
      @endif

      @if(Route::currentRouteName() == 'admin.carvings.trashed')
         @include('admin.carvings.actions.mass.restore', ['modelName'=>'carving'])
         @include('admin.carvings.actions.mass.delete', ['modelName'=>'carving'])
      @endif
      
   </div>
</div>
