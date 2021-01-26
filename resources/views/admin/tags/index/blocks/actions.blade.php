<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.tags.actions.common.create')

      @if(Route::currentRouteName() == 'admin.tags.index')
         @include('admin.tags.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.tags.trashed')
         @include('admin.tags.actions.mass.restore')
         @include('admin.tags.actions.mass.delete')         
      @endif
      
   </div>
   
</div>
