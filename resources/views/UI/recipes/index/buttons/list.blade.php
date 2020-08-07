<a href="{{ route('recipes.indexList', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-default"
   title="My Recipes">
   <i class="{{ Config::get('icons.recipes') }}"></i>
   {{ $btn_label ?? '' }}
</a>