{{-- @if(checkPerm('recipe_show', $recipe)) --}}
   <a href="{{ route('recipes.show', ($recipe->id ? $recipe->id : $archive->id)) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-default"
      title="Show Recipe">
      <i class="{{ Config::get('icons.show') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
{{-- @endif --}}
