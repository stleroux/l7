      @if(!$carving->deleted_at)
         @can('carving-edit')
            <a href="{{ route('admin.carvings.edit', $carving) }}" class="btn btn-sm btn-default" title="Edit Carving">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('carving-manage')
            <button type="button"
               class="resetViews-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#resetViewsModal"
               data-id="{{ $carving->id }}"
               data-url="{{ url('admin/carvings/carvings/resetViews', $carving) }}"
               title="Reset Carving Views"
               >
               <i class="{{ config('icons.resetViews') }} text-secondary"></i>
               {{-- Reset Views --}}
            </button>
         @endcan

         @can('carving-delete')
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $carving->id }}"
               data-url="{{ url('admin/carvings', $carving->id) }}"
               title="Trash Carving">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endcan
      @endif

      @if($carving->deleted_at)
         @can('carving-manage')
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $carving->id }}"
               data-url="{{ url('admin/carvings/restore', $carving) }}"
               title="Restore Carving">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $carving->id }}"
               data-url="{{ url('admin/carvings/delete', $carving->id) }}"
               title="Permanently Delete Carving">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif

   </div>
</div>
