<a href="{{ route('recipes.privateRecipesGrid', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="Private Recipes">
   <i class="{{ config('icons.private') }}"></i>
   {{ $btn_label ?? '' }}
</a>