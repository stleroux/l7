<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

   	@if(Route::currentRouteName() == 'admin.categories.index')
         {{-- @include('admin.actions.mass.destroy') --}}
         @include('admin.actions.mass.destroy', ['modelName'=>'category'])
      @endif
         
      @if(Route::currentRouteName() == 'admin.categories.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'category'])
         @include('admin.actions.mass.delete', ['modelName'=>'category'])
      @endif

   </div>

</div>
