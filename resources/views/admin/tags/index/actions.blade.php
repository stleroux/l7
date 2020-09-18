<div class="dropdown text-center">

   <a class="dropdown-button"
      id="dropdown-menu-{{ $tag->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>

   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $tag->id }}">

      @if(!$tag->deleted_at)

         {{-- @can('tag-edit') --}}
            <a href="{{ route('admin.tags.edit', $tag) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         {{-- @endcan --}}

         {{-- @can('tag-delete') --}}
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $tag->id }}"
               data-url="{{ url('admin/tags', $tag->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </a>
         {{-- @endcan --}}

      @endif

      @if($tag->deleted_at)

         {{-- @can('tag-manage') --}}

            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.tags.restore', $tag) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $tag->id }}"
               data-url="{{ url('admin/tags/delete', $tag->id) }}">
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         
         {{-- @endcan --}}

      @endif

   </div>

</div>
