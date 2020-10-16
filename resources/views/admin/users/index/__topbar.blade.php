<div class="row mb-2">

   <div class="col">
      @if(Route::currentRouteName() == 'admin.users.index')
         @can('user-create')
            <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success">
               <i class="{{ Config::get('icons.add') }}"></i>
               <div class="d-none d-lg-inline">
                  Create User
               </div>
            </a>
         @endcan
      @endif


      <a href="{{ route('admin.users.index') }}" class="btn btn-sm bg-light">
         <i class="{{ Config::get('icons.users') }}" ></i>
         All Users
      </a>
      <a href="{{ route('admin.users.active') }}" class="btn btn-sm bg-light">
         <i class="{{ Config::get('icons.active') }} text-primary"></i>
         Active
      </a>
      <a href="{{ route('admin.users.inactive') }}" class="btn btn-sm bg-light">
         <i class="{{ Config::get('icons.inactive') }} text-primary"></i>
         Inactive
      </a>
      <a href="{{ route('admin.users.noRoles') }}" class="btn btn-sm bg-light">
         <i class="{{ Config::get('icons.role') }} text-primary"></i>
         Without Roles
      </a>
      <a href="{{ route('admin.users.trashed') }}" class="btn btn-sm bg-light">
         <i class="{{ Config::get('icons.trashed') }} text-pink"></i>
         Trashed
      </a>



   </div>

   <div class="col">

      <div class="float-right">
         <div class="dropdown text-center float-right">
            <a class="dropdown-button border"
               id="dropdown-menu"
               data-toggle="dropdown"
               data-boundary="viewport"
               aria-haspopup="true"
               aria-expanded="false">
               <i class="{{ Config::get('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               <a href="{{ route('admin.users.index') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.users') }}" ></i>
                  All Users
               </a>
               <a href="{{ route('admin.users.active') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.active') }} text-primary"></i>
                  Active
               </a>
               <a href="{{ route('admin.users.inactive') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.inactive') }} text-primary"></i>
                  Inactive
               </a>
               <a href="{{ route('admin.users.noRoles') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.role') }} text-primary"></i>
                  Without Roles
               </a>
               <a href="{{ route('admin.users.trashed') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.trashed') }} text-pink"></i>
                  Trashed
               </a>
            </div>
         </div>
      </div>

      <div class="float-right px-1">
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ Config::get('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>
      </div>

      @if(Route::currentRouteName() == 'admin.users.index')
         <form action="{{ route('admin.users.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ Config::get('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.users.trashed')
         <form action="{{ route('admin.users.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ Config::get('icons.delete') }}"></i>
               Delete Selected
            </a>
         </form>

         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-sm bg-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ Config::get('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>
      @endif
      
   </div>
</div>
