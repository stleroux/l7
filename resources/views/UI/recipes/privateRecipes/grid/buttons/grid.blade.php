<a href="{{ route('recipes.privateRecipesGrid', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="Private Recipes">
   <i class="{{ Config::get('icons.private') }}"></i>
   {{ $btn_label ?? '' }}
</a>