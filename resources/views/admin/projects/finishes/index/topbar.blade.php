<div class="row mb-2">

   <div class="col">
      @if(Route::currentRouteName() == 'admin.projects.finishes.index')
         @can('project_finishes-create')
            <a href="{{ route('admin.projects.finishes.create') }}" class="btn btn-sm btn-success">
               <i class="{{ Config::get('icons.add') }}"></i>
               Create Finish
            </a>
         @endcan
      @endif
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
               @can('project_finishes-manage')
                  <a href="{{ route('admin.projects.finishes.index') }}" class="dropdown-item bg-light">
                     <i class="{{ Config::get('icons.finishes') }}"></i>
                     All Finishes
                  </a>
               @endcan
               @can('project_finishes-delete')
                  <a href="{{ route('admin.projects.finishes.trashed') }}" class="dropdown-item bg-light">
                     <i class="{{ Config::get('icons.trashed') }} text-danger"></i>
                     Trashed Finishes
                  </a>
               @endcan
            </div>
         </div>
      </div>

      <div class="float-right px-1">
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ Config::get('icons.help') }}"></i>
            Help
         </a>
      </div>

      @if(Route::currentRouteName() == 'admin.projects.finishes.index')
         <form action="{{ route('admin.projects.finishes.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
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

      @if(Route::currentRouteName() == 'admin.projects.finishes.trashed')
         <form action="{{ route('admin.projects.finishes.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ Config::get('icons.trash') }}"></i>
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
