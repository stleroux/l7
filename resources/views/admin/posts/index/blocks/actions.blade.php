<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.posts.actions.common.create')

      @if(Route::currentRouteName() == 'admin.posts.index')
         @include('admin.posts.actions.mass.unpublish')
         @include('admin.posts.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.posts.unpublished')
         @include('admin.posts.actions.mass.publish')
         @include('admin.posts.actions.mass.resetViews')         
         @include('admin.posts.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.posts.new')
         @include('admin.posts.actions.mass.publish')
         @include('admin.posts.actions.mass.resetViews')         
         @include('admin.posts.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.posts.future')
         @include('admin.posts.actions.mass.publish')
         @include('admin.posts.actions.mass.resetViews')         
         @include('admin.posts.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.posts.trashed')
         @include('admin.posts.actions.mass.restore')
         @include('admin.posts.actions.mass.delete')         
      @endif

   </div>
</div>
