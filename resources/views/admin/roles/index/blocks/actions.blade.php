<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.roles.actions.common.create')

      @if(Route::currentRouteName() == 'admin.roles.index')
         @include('admin.roles.actions.mass.destroy')         
      @endif

      @if(Route::currentRouteName() == 'admin.roles.trashed')
         @include('admin.roles.actions.mass.restore')
         @include('admin.roles.actions.mass.delete')
      @endif
      
   </div>

</div>
