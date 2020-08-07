<a href="{{ route('recipes.myRecipesGrid', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-default"
   title="My Recipes">
   <i class="{{ Config::get('icons.mine') }}"></i>
   {{ $btn_label ?? '' }}
</a>