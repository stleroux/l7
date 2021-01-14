<a href="{{ route('recipes.myRecipesList', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="My Recipes">
   <i class="{{ config('icons.mine') }}"></i>
   {{ $btn_label ?? '' }}
</a>