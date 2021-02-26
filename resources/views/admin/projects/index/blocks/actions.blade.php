<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'project'])

      @if(Route::currentRouteName() != 'admin.projects.trashed')
         @include('admin.actions.mass.destroy', ['modelName'=>'project'])
      @endif

      @if(Route::currentRouteName() == 'admin.projects.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'project'])
         @include('admin.actions.mass.delete', ['modelName'=>'project'])
      @endif

   </div>
</div>
