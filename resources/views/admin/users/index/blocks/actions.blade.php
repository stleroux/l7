<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.users.actions.common.create')

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.approved')
         @include('admin.users.actions.mass.disable')
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.disabled')
         @include('admin.users.actions.mass.approve')
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() != 'admin.users.trashed')
         @include('admin.users.actions.mass.destroy')
      @endif
      {{-- //////////////// --}}


      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.trashed')         
         @include('admin.users.actions.mass.restore')
         @include('admin.users.actions.mass.delete')
      @endif
      {{-- //////////////// --}}

   </div>

</div>
