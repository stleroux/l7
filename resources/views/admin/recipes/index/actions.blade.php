      @if(!$recipe->deleted_at)
         {{-- @can('recipe-edit') --}}
         @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))
            <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-light" title="Edit Recipe">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>

{{--             <a href="{{ route('admin.recipes.unpublish', $recipe) }}"
               class="btn btn-sm bg-light"
               onclick="return confirm('Are you sure you want to unpublish this recipe?');"
            >
               <i class="{{ Config::get('icons.publish') }} text-pink"></i>
               Unpublish
            </a> --}}
         {{-- @endcan --}}


<button type="button"
   class="unpublish-model btn btn-sm btn-light"
   data-toggle="modal"
   data-target="#unpublishModal"
   data-id="{{ $recipe->id }}"
   data-url="{{ url('admin/recipes/unpublish', $recipe) }}"
   title="Unpublish Recipe"
   >
   <i class="{{ Config::get('icons.publish') }} text-warning"></i>
   {{-- Unpublish --}}
</button>


<button type="button"
   class="resetViews-model btn btn-sm btn-light"
   data-toggle="modal"
   data-target="#resetViewsModal"
   data-id="{{ $recipe->id }}"
   data-url="{{ url('admin/recipes/resetViews', $recipe) }}"
   title="Reset Views Count"
   >
   <i class="{{ Config::get('icons.resetViews') }} text-secondary"></i>
   {{-- Reset Views --}}
</button>







         @endif

         {{-- @can('recipe-delete') --}}
         @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))
            <button type="button"
               class="destroy-model btn btn-sm btn-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $recipe->id }}"
               data-url="{{ url('admin/recipes', $recipe) }}"
               title="Trash Recipe"
               >
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endif
         {{-- @endcan --}}
      @endif

{{--       @if($recipe->deleted_at)
         @can('recipe-edit')
            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.recipes.restore', $recipe) }}" class="btn btn-sm bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="btn btn-sm delete-model bg-light"
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