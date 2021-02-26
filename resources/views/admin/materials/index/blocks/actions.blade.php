<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'material'])

      @if(Route::currentRouteName() != 'admin.materials.trashed')
         @include('admin.actions.mass.destroy', ['modelName'=>'material'])
      @endif

      @if(Route::currentRouteName() == 'admin.materials.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'material'])
         @include('admin.actions.mass.delete', ['modelName'=>'material'])
      @endif

   </div>
</div>
