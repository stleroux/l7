<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'block'])

      @if(Route::currentRouteName() != 'admin.blocks.trashed')
         {{-- @include('admin.actions.mass.destroy', ['modelName'=>'block']) --}}
      @endif

      @if(Route::currentRouteName() == 'admin.blocks.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'block'])
         @include('admin.actions.mass.delete', ['modelName'=>'block'])
      @endif

   </div>
</div>
