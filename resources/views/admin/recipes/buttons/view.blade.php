<a href="{{ route('admin.recipes.show', $recipe->id) }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
   title="Show Recipe">
   <i class="{{ Config::get('icons.show') }}"></i>
   {{ $btn_label ?? '' }}
</a>
