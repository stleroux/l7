<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'recipe'])
      
      @if(Route::currentRouteName() == 'admin.recipes.index')
         @include('admin.actions.mass.unpublish', ['modelName'=>'recipe'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'recipe'])
         @include('admin.actions.mass.destroy', ['modelName'=>'recipe'])
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.unpublished')
         @include('admin.actions.mass.publish', ['modelName'=>'recipe'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'recipe'])
         @include('admin.actions.mass.destroy', ['modelName'=>'recipe'])
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'recipe'])
         @include('admin.actions.mass.delete', ['modelName'=>'recipe'])
      @endif

   </div>

</div>
