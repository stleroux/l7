<a href="{{ route('recipes.indexGrid', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="Recipes">
   <i class="{{ Config::get('icons.recipes') }}"></i>
   {{ $btn_label ?? '' }}
</a>