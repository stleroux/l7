<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'bug'])
      
      @if(Route::currentRouteName() == 'admin.recipes.index')
         @include('admin.actions.mass.unpublish', ['modelName'=>'bug'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'bug'])
         @include('admin.actions.mass.destroy', ['modelName'=>'bug'])
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.unpublished')
         @include('admin.actions.mass.publish', ['modelName'=>'bug'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'bug'])
         @include('admin.actions.mass.destroy', ['modelName'=>'bug'])
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'bug'])
         @include('admin.actions.mass.delete', ['modelName'=>'bug'])
      @endif

   </div>

</div>
