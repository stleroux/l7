<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('bug-create')
         <a href="{{ route('admin.bugs.create') }}" class="btn btn-block btn-outline-success" title="Create Bug">
            <i class="{{ config('icons.add') }}"></i>
            <div class="d-none d-lg-inline">
               Report a Bug
            </div>
         </a>
      @endcan

      {{-- //////////////// --}}
      @if(Route::currentRouteName() != 'admin.bugs.trashed')
         <form action="{{ route('admin.bugs.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected Bugs
            </a>
         </form>
      @endif
      {{-- //////////////// --}}


      {{-- //////////////// --}}
      @if(Route::currentRouteName() == 'admin.bugs.trashed')         
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
               Restore Selected Bugs
            </a>
         </form>

         <form action="{{ route('admin.bugs.mass_delete') }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected Bugs
            </a>
         </form>
      @endif
      {{-- //////////////// --}}

   </div>
</div>
