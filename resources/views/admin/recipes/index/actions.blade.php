@if(Route::currentRouteName('') == 'admin.recipes.index')
   @include('admin.recipes.index.actions.grid.edit')
   @include('admin.recipes.index.actions.grid.unpublish')
   @include('admin.recipes.index.actions.grid.resetViews')
   @include('admin.recipes.index.actions.grid.destroy')
@endif

@if(Route::currentRouteName('') == 'admin.recipes.unpublished')
   @include('admin.recipes.index.actions.grid.edit')
   @include('admin.recipes.index.actions.grid.publish')
   @include('admin.recipes.index.actions.grid.resetViews')
   @include('admin.recipes.index.actions.grid.destroy')
@endif

@if(Route::currentRouteName('') == 'admin.recipes.new')
   @include('admin.recipes.index.actions.grid.edit')
   @include('admin.recipes.index.actions.grid.resetViews')
   @include('admin.recipes.index.actions.grid.destroy')
@endif

@if(Route::currentRouteName('') == 'admin.recipes.future')
   @include('admin.recipes.index.actions.grid.edit')
   @include('admin.recipes.index.actions.grid.resetViews')
   @include('admin.recipes.index.actions.grid.destroy')
@endif

@if(Route::currentRouteName('') == 'admin.recipes.trashed')
   @include('admin.recipes.index.actions.grid.restore')
   @include('admin.recipes.index.actions.grid.delete')
@endif
