<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('recipe-create')
         <a href="{{ route('admin.recipes.create') }}" class="btn btn-block btn-outline-success">
            <i class="{{ config('icons.add') }}"></i>
            <div class="d-none d-lg-inline">
               Create Recipe
            </div>
         </a>
      @endcan

      @if(Route::currentRouteName() != 'admin.recipes.trashed')
         <form action="{{ route('admin.recipes.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected Recipes
            </a>
         </form>
         <form action="" method="POST" class="">
            @csrf
            <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multipublish"
               style="display:none"
               data-target="#massPublish-modal">
               <i class="{{ config('icons.publish') }}"></i>
               Publish Selected
            </a>
         </form>
         <form action="{{ route('admin.recipes.mass_unpublish') }}" method="post" class="">
            @csrf
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="{{ config('icons.unpublish') }}"></i>
               Unpublish Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.recipes.trashed')
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
               Restore Selected Recipes
            </a>
         </form>

         {{-- <form action="{{ route('admin.recipes.mass_delete') }}" method="post"> --}}
         <form method="POST">
            @csrf
            {{-- @method('DELETE') --}}
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected Recipes 123
            </a>
         </form>

{{--          <form action="" method="POST" class="mt-2">
            @csrf
            <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-default"
               id="btn_multipublish"
               style="display:none"
               data-target="#massPublish-modal">
               <i class="{{ config('icons.publish') }}"></i>
               Publish Selected
            </a>
         </form>
         <form action="{{ route('admin.recipes.mass_unpublish') }}" method="post" class="mt-2">
            @csrf
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="{{ config('icons.unpublish') }}"></i>
               Unpublish Selected
            </a>
         </form> --}}



         {{-- <form action="" method="POST" class="mt-2">
            @csrf
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-default"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="{{ config('icons.publish') }} text-warning"></i>
               Unpublish Selected
            </a>
         </form> --}}



      @endif

   </div>
</div>
