<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

   	@if(Route::currentRouteName() == 'admin.categories.index')
         @include('admin.categories.actions.mass.destroy')
      @endif
         
      @if(Route::currentRouteName() == 'admin.categories.trashed')
         @include('admin.categories.actions.mass.restore')
         @include('admin.categories.actions.mass.delete')
      @endif

   </div>

</div>
