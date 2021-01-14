<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      {{-- @if(Route::currentRouteName() == 'admin.carvings.index') --}}
         @can('faq-create')
            <a href="{{ route('admin.faqs.create') }}" class="btn btn-block btn-outline-success" title="Create Question">
               <i class="{{ config('icons.add') }}"></i>
               <div class="d-none d-lg-inline">
                  Create Question
               </div>
            </a>
         @endcan
      {{-- @endif --}}

      @if(Route::currentRouteName() == 'admin.faqs.index')
         <form action="{{ route('admin.faqs.mass_destroy') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.faqs.trashed')
         <form action="" method="POST" class="">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-primary mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>

         <form action="{{ route('admin.faqs.mass_delete') }}" method="post" class="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.delete') }}"></i>
               Delete Selected
            </a>
         </form>
      @endif
      
   </div>
</div>
