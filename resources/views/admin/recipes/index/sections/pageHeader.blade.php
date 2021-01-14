@section('pageHeader')
   <i class="{{ config('icons.recipes') }}"></i>
   @if(Route::currentRouteName('') == 'admin.recipes.trashed')
      Trashed Recipes
   @elseif(Route::currentRouteName('') == 'admin.recipes.future')
   	Future Recipes
   @elseif(Route::currentRouteName('') == 'admin.recipes.newRecipes')
   	New Recipes
   @elseif(Route::currentRouteName('') == 'admin.recipes.unpublished')
   	Unpublished Recipces
   @elseif(Route::currentRouteName('') == 'admin.recipes.published')
   	Published Recipes
   @else
      Recipes
   @endif
@endsection