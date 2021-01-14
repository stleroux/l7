<a href="{{ route('recipes.indexGrid', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="Recipes">
   <i class="{{ config('icons.recipes') }}"></i>
   {{ $btn_label ?? '' }}
</a>