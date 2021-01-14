@auth
   <a href="{{ route('recipes.myRecipes') }}"
      class="btn btn-{{ $size }} btn-{{ Route::is('recipes.myRecipes') ? 'secondary' : 'primary' }}"
      title="My Recipes">
      <i class="{{ config('buttons.mine') }}"></i>
   </a>
@endauth