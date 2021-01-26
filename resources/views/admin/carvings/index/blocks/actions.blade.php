<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @include('admin.carvings.actions.common.create')
      
      @if(Route::currentRouteName() == 'admin.carvings.index')
         @include('admin.carvings.actions.mass.resetViews')
         @include('admin.carvings.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.carvings.trashed')
         @include('admin.carvings.actions.mass.restore')
         @include('admin.carvings.actions.mass.delete')
      @endif
      
   </div>
</div>
