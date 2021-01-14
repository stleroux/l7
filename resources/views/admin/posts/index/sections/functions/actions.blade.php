<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      {{-- @if(Route::currentRouteName() == 'admin.posts.index') --}}
         @can('post-create')
            <a href="{{ route('admin.posts.create') }}" class="btn btn-block btn-outline-success" title="Create Post">
               <i class="{{ config('icons.add') }}"></i>
               <div class="d-none d-lg-inline">
                  Create Post
               </div>
            </a>
         @endcan
      {{-- @endif --}}

      @if(Route::currentRouteName() == 'admin.posts.index')
         <form action="{{ route('admin.posts.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected Posts
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.posts.trashed')
         <form action="" method="POST" class="">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               Restore Selected Posts
            </a>
         </form>

         <form action="{{ route('admin.posts.mass_delete') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected Post
            </a>
         </form>
      @endif
      
   </div>
</div>
