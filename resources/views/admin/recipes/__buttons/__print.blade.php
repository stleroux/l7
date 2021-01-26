@if(checkPerm('recipe_read'))
   <a href="{{ route('recipes.print', $recipe->id) }}"
      class="btn btn-{{ $size }} btn-primary"
      title="Print Recipe">
      <i class="{{ config('buttons.print') }}"></i>
   </a>
@endif
