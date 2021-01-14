@if(checkPerm('recipe_published'))
   <a href="{{ route('recipes.published') }}"
      class="btn btn-{{ $size }} btn-{{ Route::is('recipes.published') ? 'secondary' : 'primary' }}"
      title="Published Recipes">
      <i class="{{ config('buttons.published') }}"></i>
   </a>
@endif
