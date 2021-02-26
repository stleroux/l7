<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'tag'])

      @if(Route::currentRouteName() == 'admin.tags.index')
         @include('admin.actions.mass.destroy', ['modelName'=>'tag'])
      @endif

      @if(Route::currentRouteName() == 'admin.tags.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'tag'])
         @include('admin.actions.mass.delete', ['modelName'=>'tag'])
      @endif
      
   </div>
   
</div>
