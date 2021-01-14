@if(Route::currentRouteName('') != 'admin.recipes.trashed')

   @if(!$recipe->deleted_at)
      {{-- @can('recipe-edit') --}}
      @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))
         
         <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-default" title="Edit Recipe">
            <i class="{{ config('icons.edit') }} text-primary"></i>
            {{-- Edit --}}
         </a>
         
         {{-- <form style="display:inline;" method="POST"> --}}
            @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish'))
               @if($recipe->published_at)
                  <button type="button"
                     class="unpublish-model btn btn-sm btn-default"
                     data-toggle="modal"
                     data-target="#unpublishModal"
                     data-id="{{ $recipe->id }}"
                     data-url="{{ url('admin/recipes/unpublish', $recipe) }}"
                     title="Unpublish Recipe"
                     >
                     <i class="{{ config('icons.publish') }} text-warning"></i>
                     {{-- Unpublish --}}
                  </button>
               @else
                  <button type="button"
                     class="publish-model btn btn-sm btn-default"
                     data-toggle="modal"
                     data-target="#publishModal"
                     data-id="{{ $recipe->id }}"
                     data-url="{{ url('admin/recipes/publish', $recipe) }}"
                     title="Publish Recipe"
                     >
                     <i class="{{ config('icons.publish') }}"></i>
                     {{-- Publish --}}
                  </button>
               @endif
            @endif
         {{-- </form> --}}

         <button type="button"
            class="resetViews-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#resetViewsModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes/resetViews', $recipe) }}"
            title="Reset Views Count"
            >
            <i class="{{ config('icons.resetViews') }} text-secondary"></i>
            {{-- Reset Views --}}
         </button>

      @endif

      {{-- @can('recipe-delete') --}}
      @if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete'))
         <button type="button"
            class="destroy-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#destroyModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes', $recipe) }}"
            title="Trash Recipe"
            >
            <i class="{{ config('icons.trash') }} text-pink"></i>
            {{-- Trash --}}
         </button>
      @endif
      {{-- @endcan --}}
   @endif

@else

   @if($recipe->deleted_at)
      @can('recipe-edit')
         {{-- <h4 class="dropdown-header">Admin Functions</h4> --}}

         {{-- <a href="{{ route('admin.recipes.restore', $recipe) }}" class="btn btn-sm btn-default" title="Restore Recipe">
            <i class="{{ config('icons.restore') }} text-primary"></i>
            Restore
         </a> --}}

         <button type="button"
            class="restore-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#restoreModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes/restore', $recipe) }}"
            title="Restore Recipe"
            >
            <i class="{{ config('icons.restore') }} text-primary"></i>
            {{-- Restore --}}
         </button>

         <!-- CANNOT use a link here, must use a button -->
{{--          <form method="post">
            @csrf
            @method('DELETE') --}}
         <button type="button"
            class="delete-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#deleteModal"
            data-id="{{ $recipe->id }}"
            data-url="{{ url('admin/recipes/delete', $recipe) }}"
            title="Permanently Delete Recipe"
            >
            <i class="{{ config('icons.delete') }} text-danger"></i>
            {{-- Delete Permanently --}}
         </button>
      @endcan
   @endif

@endif
