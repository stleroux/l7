<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'user'])

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.approved')
         @include('admin.actions.mass.disable')
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.disabled')
         @include('admin.actions.mass.approve')
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() != 'admin.users.trashed')
         @include('admin.actions.mass.destroy', ['modelName'=>'user'])
      @endif
      {{-- //////////////// --}}


      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.trashed')         
         @include('admin.actions.mass.restore', ['modelName'=>'user'])
         @include('admin.actions.mass.delete', ['modelName'=>'user'])
      @endif
      {{-- //////////////// --}}

   </div>

</div>
