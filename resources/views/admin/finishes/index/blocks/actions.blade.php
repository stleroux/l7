<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'finish'])
      
      @if(Route::currentRouteName() == 'admin.finishes.index')
         @include('admin.actions.mass.destroy', ['modelName'=>'finish'])
      @endif

      @if(Route::currentRouteName() == 'admin.finishes.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'finish'])
         @include('admin.actions.mass.delete', ['modelName'=>'finish'])
      @endif
      
   </div>
</div>