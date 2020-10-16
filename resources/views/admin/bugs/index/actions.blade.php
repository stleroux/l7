<div class="dropdown text-center">

   <a class="dropdown-button"
      id="dropdown-menu-{{ $bug->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>

   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $bug->id }}">

      @if(!$bug->deleted_at)

         @can('bug-edit')
            <a href="{{ route('admin.bugs.edit', $bug) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         @endcan

         @can('bug-delete')
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $bug->id }}"
               data-url="{{ url('admin/bugs', $bug->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </a>
         @endcan

      @endif

      @if($bug->deleted_at)

         @can('bug-manage')

            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.bugs.restore', $bug) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $bug->id }}"
               data-url="{{ url('admin/bugs/delete', $bug->id) }}">
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         
         @endcan

      @endif

   </div>

</div>