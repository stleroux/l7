<a href="{{ route('recipes.myRecipesList', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="My Recipes">
   <i class="{{ Config::get('icons.mine') }}"></i>
   {{ $btn_label ?? '' }}
</a>