<div class="row mb-2">
   
   <div class="col">
{{--       @can('permission-create')
         <a href="{{ route('admin.permissions.create') }}" class="btn btn-sm btn-success">
            <i class="nav-icon fas fa-user-tag"></i>
            Create Permission
         </a>
      @endcan --}}
   </div>

   <div class="col p-0 m-0">
      <div class="float-right">

         <a href="#" class="btn btn-sm btn-light border float-right mx-2" data-toggle="modal" data-target="#helpModal">
            <i class="nav-icon fas fa-question-circle"></i>
            Help
         </a>

         <form action="{{ route('admin.permissions.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="fas fa-trash nav-icon"></i>
               Trash Selected
            </a>
         </form>
         
         <form action="{{ route('admin.permissions.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-warning"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="fas fa-trash nav-icon"></i>
               Delete Selected
            </a>
         </form>

         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-sm bg-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="fas fa-trash-restore"></i>
               Restore Selected
            </a>
         </form>

      </div>
   </div>

</div>
