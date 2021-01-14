<div class="row mb-2">

   <div class="col">
      @if(Route::currentRouteName() == 'admin.tags.index')
         @can('role-create')
            <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-success" title="Create Tag">
               <i class="{{ config('icons.add') }}"></i>
               <div class="d-none d-lg-inline">
                  Create Tag
               </div>
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
               aria-expanded="false"
               title="Actions">
               <i class="{{ config('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               <a href="{{ route('admin.tags.index') }}" class="dropdown-item bg-light">
                  <i class="{{ config('icons.tags') }}"></i>
                  All tags
               </a>
               <a href="{{ route('admin.tags.trashed') }}" class="dropdown-item bg-light">
                  <i class="{{ config('icons.trashed') }} text-pink"></i>
                  Trashed
               </a>
            </div>
         </div>
      </div>

      <div class="float-right px-1">
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal" title="Help">
            <i class="{{ config('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>
      </div>

      @if(Route::currentRouteName() == 'admin.tags.index')
         <form action="{{ route('admin.tags.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.tags.trashed')
         <form action="{{ route('admin.tags.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected
            </a>
         </form>

         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>
      @endif
      
   </div>
</div>
