{{-- Used in Recipe index page to add butotn to each recipe card --}}
{{-- @if(checkPerm('recipe_browse')) --}}
   @if(!$recipe->isFavorited())
      <a href="{{ route('recipes.favoriteAdd', $recipe->id) }}"
         class="btn btn-sm btn-maroon"
         title="Add Favorite">
         <i class="{{ Config::get('icons.favorite') }} text-success"></i>
         <div class="d-none d-lg-inline">
            Add Favorite
         </div>
      </a>
   @else
      <a href="{{ route('recipes.favoriteRemove', $recipe->id) }}"
         class="btn btn-sm btn-maroon"
         title="Remove Favorite">
         <i class="{{ Config::get('icons.favorite') }} text-danger"></i>
         <div class="d-none d-lg-inline">
            Remove Favorite
         </div>
      </a>
   @endif
{{-- @endif --}}
