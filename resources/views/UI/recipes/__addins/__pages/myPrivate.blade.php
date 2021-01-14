@auth
   <a href="{{ route('recipes.myPrivateRecipes') }}"
      class="btn btn-{{ $size }} btn-{{ Route::is('recipes.myPrivateRecipes') ? 'secondary' : 'primary' }}"
      title="My Private Recipes">
      <i class="{{ config('buttons.private') }}"></i>
   </a>
@endauth