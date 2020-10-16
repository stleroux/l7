<div class="row mb-2">

   <div class="col">
      @if(Route::currentRouteName() == 'admin.bugs.index')
         @can('bug-create')
            <a href="{{ route('admin.bugs.create') }}" class="btn btn-sm btn-success" title="Create Bug">
               <i class="{{ Config::get('icons.add') }}"></i>
               <div class="d-none d-lg-inline">
                  Report a Bug
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
               <i class="{{ Config::get('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               <a href="{{ route('admin.bugs.index') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.bugs') }}"></i>
                  All Bugs
               </a>

               <!-- Generate links based on options in Model -->
               @foreach(App\Models\Bug::statusOptions() as $statusOptionKey => $statusOptionValue)
                  <a href="{{ route('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) }}" class="dropdown-item bg-light">
                     <i class="{{ Config::get('icons.bugs') }}"></i>
                     {{ ucfirst($statusOptionValue) }}
                  </a>
               @endforeach

               <a href="{{ route('admin.bugs.trashed') }}" class="dropdown-item bg-light">
                  <i class="{{ Config::get('icons.bugs') }} text-pink"></i>
                  Trashed Bugs
               </a>

            </div>
         </div>
      </div>

      <div class="float-right px-1">
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal" title="Help">
            <i class="{{ Config::get('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>
      </div>

      @if(Route::currentRouteName() != 'admin.bugs.trashed')
         <form action="{{ route('admin.bugs.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
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

      @if(Route::currentRouteName() == 'admin.bugs.trashed')
         <form action="{{ route('admin.bugs.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
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
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
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