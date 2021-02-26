<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'feature'])
      
      @if(Route::currentRouteName() == 'admin.features.index')
         {{-- @include('admin.actions.mass.resetViews', ['modelName'=>'feature']) --}}
         @include('admin.actions.mass.destroy', ['modelName'=>'feature'])
      @endif

      @if(Route::currentRouteName() == 'admin.features.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'feature'])
         @include('admin.actions.mass.delete', ['modelName'=>'feature'])
      @endif
      
   </div>
</div>


