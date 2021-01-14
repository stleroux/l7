

      @if(!$tag->deleted_at)

         {{-- @can('tag-edit') --}}
            <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-sm btn-default" title="Edit Tag">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         {{-- @endcan --}}

         {{-- @can('tag-delete') --}}
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $tag->id }}"
               data-url="{{ url('admin/tags', $tag) }}"
               title="Trash Tag">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </a>
         {{-- @endcan --}}

      @endif

      @if($tag->deleted_at)

         {{-- @can('tag-manage') --}}

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $tag->id }}"
               data-url="{{ url('admin/tags/restore', $tag) }}"
               title="Restore Tag"
               >
               <i class="{{ config('icons.restore') }}"></i>
               {{-- Restore --}}
            </button>


            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $tag->id }}"
               data-url="{{ url('admin/tags/delete', $tag) }}"
               title="Permanently Delete Tag">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         
         {{-- @endcan --}}

      @endif
