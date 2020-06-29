<div class="row mb-2">

   <div class="col">
      @can('user-create')
         <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success">
            <i class="nav-icon fas fa-user-tag"></i>
            Create User
         </a>
      @endcan
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
               <i class="fa fa-ellipsis-v px-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               <a href="{{ route('admin.users.index') }}" class="dropdown-item bg-light">
                  <i class="fa fa-user text-primary nav-item"></i>
                  All Users
               </a>
               <a href="{{ route('admin.users.trashed') }}" class="dropdown-item bg-light">
                  <i class="fa fa-user text-primary nav-item"></i>
                  Trashed
               </a>
               <a href="{{ route('admin.users.noRoles') }}" class="dropdown-item bg-light">
                  <i class="fa fa-user text-primary nav-item"></i>
                  No Roles
               </a>
            </div>
         </div>
      </div>

      <div class="float-right px-1">
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="nav-icon fas fa-question-circle"></i>
            Help
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
               <i class="fas fa-trash nav-icon"></i>
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
               <i class="fas fa-trash-alt nav-icon"></i>
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
               <i class="fas fa-trash-restore"></i>
               Restore Selected
            </a>
         </form>
      @endif
      
   </div>
</div>
