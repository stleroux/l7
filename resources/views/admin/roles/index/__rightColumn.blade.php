@can('role-create')
   <a href="{{ route('admin.roles.create') }}" class="btn btn-block btn-outline-success" title="Create Role">
      <i class="{{ config('icons.add') }}"></i>
      <div class="d-none d-lg-inline">
         Create Role
      </div>
   </a>
@endcan

<a href="{{ route('admin.roles.index') }}" class="btn btn-block btn-light border">
   <i class="{{ config('icons.roles') }}"></i>
   All Roles
</a>

<a href="{{ route('admin.roles.trashed') }}" class="btn btn-block btn-light border">
   <i class="{{ config('icons.trashed') }} text-pink"></i>
   Trashed Roles
</a>

<a href="#" class="btn btn-block btn-outline-secondary" data-toggle="modal" data-target="#helpModal" title="Help">
   <i class="{{ config('icons.help') }}"></i>
   <div class="d-none d-lg-inline">
      Help
   </div>
</a>

      @if(Route::currentRouteName() != 'admin.roles.trashed')
         <form action="{{ route('admin.roles.mass_destroy') }}" method="post" class="mt-2">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.roles.trashed')
         <form action="{{ route('admin.roles.mass_delete') }}" method="post" class="mt-2">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected
            </a>
         </form>

         <form action="" method="POST" class="mt-2">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>
      @endif
