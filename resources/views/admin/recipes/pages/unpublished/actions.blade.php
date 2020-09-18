<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $recipe->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $recipe->id }}">
      @if(!$recipe->deleted_at)
         {{-- @can('recipe-edit') --}}
         @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))
            <a href="{{ route('admin.recipes.edit', $recipe) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>

{{--             <a href="{{ route('admin.recipes.publish', $recipe) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.publish') }} text-primary"></i>
               Publish
            </a> --}}
         {{-- @endcan --}}

<button type="button"
   class="dropdown-item publish-model bg-light"
   data-toggle="modal"
   data-target="#publishModal"
   data-id="{{ $recipe->id }}"
   data-url="{{ url('admin/recipes/publish', $recipe) }}"
   >
   <i class="{{ Config::get('icons.publish') }} text-primary"></i>
   Publish
</button>

         @endif

         {{-- @can('recipe-delete') --}}
         @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))
            <button type="button"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $recipe->id }}"
               data-url="{{ url('admin/recipes', $recipe) }}"
               >
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </button>
         @endif
         {{-- @endcan --}}
      @endif

{{--       @if($recipe->deleted_at)
         @can('recipe-edit')
            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.recipes.restore', $recipe) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $recipe->id }}"
               data-url="{{ url('admin/recipes/delete', $recipe) }}"
               >
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif --}}

   </div>
</div>
