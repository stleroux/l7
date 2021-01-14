<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

   	@if(Route::currentRouteName() == 'admin.categories.index')

         <form action="{{ route('admin.categories.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
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
         
      @if(Route::currentRouteName() == 'admin.categories.trashed')

         <form action="" method="POST" class="">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-outline-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="fas fa-trash-restore"></i>
               Restore Selected
            </a>
         </form>

         <form action="{{ route('admin.categories.mass_delete') }}" method="post" class="mt-2">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="fas fa-trash nav-icon"></i>
               Delete Selected
            </a>
         </form>

      @endif
      
   </div>
</div>
