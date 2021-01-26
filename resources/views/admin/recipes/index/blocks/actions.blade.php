<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.recipes.index.actions.common.create')
      
      @if(Route::currentRouteName() == 'admin.recipes.index')
         @include('admin.recipes.index.actions.mass.unpublish')
         @include('admin.recipes.index.actions.mass.resetViews')
         @include('admin.recipes.index.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.unpublished')
         @include('admin.recipes.index.actions.mass.publish')
         @include('admin.recipes.index.actions.mass.resetViews')
         @include('admin.recipes.index.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.trashed')
         @include('admin.recipes.index.actions.mass.restore')
         @include('admin.recipes.index.actions.mass.delete')
      @endif

   </div>

</div>
