<a href="{{ route('recipes.indexList', 'all') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
   title="My Recipes">
   <i class="{{ config('icons.recipes') }}"></i>
   {{ $btn_label ?? '' }}
</a>