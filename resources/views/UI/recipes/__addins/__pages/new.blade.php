@if(checkPerm('recipe_new'))
   <a href="{{ route('recipes.newRecipes') }}"
      class="btn btn-{{ $size }} btn-{{ Route::is('recipes.newRecipes') ? 'secondary' : 'primary' }}"
      title="New Recipes">
      <i class="{{ config('buttons.new') }}"></i>
   </a>
@endif