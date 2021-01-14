<div class="row mb-2">

   <div class="col">
      @can('post-create')
         @include('admin.posts.buttons.add')
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
               <i class="{{ config('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               {{-- @can('post-list') --}}
                  <a href="{{ route('admin.posts.index') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.posts') }}"></i>
                     Published Posts
                  </a>
               {{-- @endcan --}}

               {{-- @can('post-list') --}}
                  <a href="{{ route('admin.posts.unpublished') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.posts') }}"></i>
                     Unpublished Posts
                  </a>
               {{-- @endcan --}}

               {{-- @can('post-list') --}}
                  <a href="{{ route('admin.posts.new') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.posts') }}"></i>
                     New Posts
                  </a>
               {{-- @endcan --}}

               {{-- @can('post-list') --}}
                  <a href="{{ route('admin.posts.future') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.posts') }}"></i>
                     Future Posts
                  </a>
               {{-- @endcan --}}
               
               {{-- @can('post-delete') --}}
                  <a href="{{ route('admin.posts.trashed') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.trashed') }} text-danger"></i>
                     Trashed Posts
                  </a>
               {{-- @endcan --}}
            </div>
         </div>
      </div>

      <div class="float-right px-1">         
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ config('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>
      </div>

      {{-- @if(Route::currentRouteName() == 'admin.posts.index') --}}
         <form action="{{ route('admin.posts.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      {{-- @endif --}}


         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="{{ config('icons.unpublish') }}"></i>
               Unpublish Selected
            </a>
         </form>


         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-sm bg-primary"
               id="btn_multipublish"
               style="display:none"
               data-target="#massPublish-modal">
               <i class="{{ config('icons.publish') }}"></i>
               Publish Selected
            </a>
         </form>



         
{{--       @if(Route::currentRouteName() == 'admin.posts.trashed')
         <form action="{{ route('admin.posts.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.trash') }}"></i>
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
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>
      @endif --}}
      
   </div>
</div>
