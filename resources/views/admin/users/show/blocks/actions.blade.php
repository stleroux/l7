<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      @include('admin.actions.common.back', ['modelName'=>'user'])
      @include('admin.actions.common.edit', ['modelName'=>'user', 'model'=>$user])
      @if(!$user->account_status)
         @include('admin.actions.common.enable', ['modelName'=>'user', 'model'=>$user])
      @else
         @include('admin.actions.common.disable', ['modelName'=>'user', 'model'=>$user])
      @endif

      {{-- @include('admin.actions.common.create') --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.approved')
         @include('admin.actions.mass.disable', ['modelName'=>'user'])
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.disabled')
         @include('admin.actions.mass.approve', ['modelName'=>'user'])
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
