<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'post'])

      @if(Route::currentRouteName() == 'admin.posts.index')
         @include('admin.actions.mass.unpublish', ['modelName'=>'post'])
         @include('admin.actions.mass.destroy', ['modelName'=>'post'])
      @endif

      @if(Route::currentRouteName() == 'admin.posts.unpublished')
         @include('admin.actions.mass.publish', ['modelName'=>'post'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'post'])
         @include('admin.actions.mass.destroy', ['modelName'=>'post'])
      @endif

      @if(Route::currentRouteName() == 'admin.posts.new')
         @include('admin.actions.mass.publish', ['modelName'=>'post'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'post'])
         @include('admin.actions.mass.destroy', ['modelName'=>'post'])
      @endif

      @if(Route::currentRouteName() == 'admin.posts.future')
         @include('admin.actions.mass.publish', ['modelName'=>'post'])
         @include('admin.actions.mass.resetViews', ['modelName'=>'post'])
         @include('admin.actions.mass.destroy', ['modelName'=>'post'])
      @endif

      @if(Route::currentRouteName() == 'admin.posts.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'post'])
         @include('admin.actions.mass.delete', ['modelName'=>'post'])
      @endif

   </div>
</div>
