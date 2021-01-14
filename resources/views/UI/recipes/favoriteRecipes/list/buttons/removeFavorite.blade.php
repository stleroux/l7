<a href="{{ route('recipes.favoriteRemove', $recipe->id) }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="Remove Favorite">
   <i class="{{ config('icons.favorite') }} text-danger"></i>
   <div class="d-none d-lg-inline">
      {{ $btn_label ?? '' }}
   </div>
</a>
