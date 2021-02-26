<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'bug'])

      @if(Route::currentRouteName() != 'admin.bugs.trashed')
         @include('admin.actions.mass.destroy', ['modelName'=>'bug'])
      @endif

      @if(Route::currentRouteName() == 'admin.bugs.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'bug'])
         @include('admin.actions.mass.delete', ['modelName'=>'bug'])
      @endif

   </div>
</div>
