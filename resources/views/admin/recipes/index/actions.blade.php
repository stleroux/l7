@if(Route::currentRouteName('') == 'admin.recipes.index')
   @include('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.unpublish', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe])
@endif

@if(Route::currentRouteName('') == 'admin.recipes.unpublished')
   @include('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.publish', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe])
@endif

@if(Route::currentRouteName('') == 'admin.recipes.new')
   @include('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe])
@endif

@if(Route::currentRouteName('') == 'admin.recipes.future')
   @include('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe])
@endif

@if(Route::currentRouteName('') == 'admin.recipes.trashed')
   @include('admin.actions.grid.restore', ['modelName'=>'recipe', 'model'=>$recipe])
   @include('admin.actions.grid.delete', ['modelName'=>'recipe', 'model'=>$recipe])
@endif
