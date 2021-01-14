<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('user-create')
         <a href="{{ route('admin.users.create') }}" class="btn btn-block btn-outline-success">
            <i class="{{ config('icons.add') }}"></i>
            <div class="d-none d-lg-inline">
               Create User
            </div>
         </a>
      @endcan

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.approved')
         <form action="{{ route('admin.users.mass_disable') }}" method="post" class="">
            @csrf
            {{-- @method('DELETE') --}}
            <input type="hidden" name="mass_disable_ids" id="mass_disable_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multidisable"
               style="display:none"
               data-target="#massDisable-modal">
               <i class="{{ config('icons.disabled') }}"></i>
               Disable Selected Users
            </a>
         </form>
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.disabled')
         <form action="{{ route('admin.users.mass_approve') }}" method="post" class="">
            @csrf
            {{-- @method('DELETE') --}}
            <input type="hidden" name="mass_approve_ids" id="mass_approve_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multiapprove"
               style="display:none"
               data-target="#massApprove-modal">
               <i class="{{ config('icons.active') }}"></i>
               Approve Selected Users
            </a>
         </form>
      @endif
      {{-- //////////////// --}}

      {{-- //////////////// --}}
      @if(Route::currentRouteName() != 'admin.users.trashed')
         <form action="{{ route('admin.users.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected Users
            </a>
         </form>
      @endif
      {{-- //////////////// --}}


      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.users.trashed')         
         <form action="" method="POST">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-outline-primary mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected Users
            </a>
         </form>

         <form action="{{ route('admin.users.mass_delete') }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected Users
            </a>
         </form>
      @endif
      {{-- //////////////// --}}

   </div>
</div>
