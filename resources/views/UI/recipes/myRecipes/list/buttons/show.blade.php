{{-- @if(checkPerm('recipe_show', $recipe)) --}}
   <a href="{{ route('recipes.show', ($recipe->id ? $recipe->id : $archive->id)) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
      title="Show Recipe">
      <i class="{{ config('icons.show') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
{{-- @endif --}}
