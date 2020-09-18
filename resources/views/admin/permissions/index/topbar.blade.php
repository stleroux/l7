<div class="row mb-2">
   
   <div class="col">
{{--       @can('permission-create')
         <a href="{{ route('admin.permissions.create') }}" class="btn btn-sm btn-success">
            <i class="nav-icon fas fa-user-tag"></i>
            Create Permission
         </a>
      @endcan --}}
   </div>

   <div class="col">

      <div class="float-right">
         <div class="dropdown text-center float-right">
            <a class="dropdown-button border"
               id="dropdown-menu"
               data-toggle="dropdown"
               data-boundary="viewport"
               aria-haspopup="true"
               aria-expanded="false"
               title="Actions">
               <i class="{{ Config::get('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               <a href="{{ route('admin.permissions.index') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.permissions') }}"></i>
                  All Permissions
               </a>
               <a href="{{ route('admin.permissions.trashed') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.trashed') }} text-pink"></i>
                  Trashed Permissions
               </a>
            </div>
         </div>
      </div>

      <div class="float-right px-1">

         <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal">
            <i class="{{ Config::get('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>

         @if(Route::currentRouteName() == 'admin.permissions.index')

            <form action="{{ route('admin.permissions.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
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
         
         @if(Route::currentRouteName() == 'admin.permissions.trashed')

            <form action="{{ route('admin.permissions.mass_delete') }}" method="post" class="float-right p-0 pl-1">
               @csrf
               @method('DELETE')
               <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
               <a data-toggle="modal"
                  class="btn btn-sm bg-danger"
                  id="btn_multidelete"
                  style="display:none"
                  data-target="#massDelete-modal">
                  <i class="fas fa-trash nav-icon"></i>
                  Delete Selected
               </a>
            </form>

            <form action="" method="POST" class="float-right p-0 pl-1">
               @csrf
               <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
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

</div>
