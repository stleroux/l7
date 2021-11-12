<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'offering'])

      @if(Route::currentRouteName() == 'admin.offerings.index')
         {{-- @include('admin.actions.mass.publish', ['modelName'=>'offering']) --}}
         {{-- @include('admin.actions.mass.unpublish', ['modelName'=>'offering']) --}}
         @include('admin.actions.mass.destroy', ['modelName'=>'offering'])
      @endif

      @if(Route::currentRouteName() == 'admin.offerings.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'offering'])
         @include('admin.actions.mass.delete', ['modelName'=>'offering'])
      @endif
      
   </div>

</div>
