<div class="row pb-2">
   <div class="col">
      <span class="float-right">
         {{-- <div class="btn-group">
            @include('UI.recipes.myRecipes.buttons.list', ['size'=>'sm', 'btn_label'=>'My Recipes'])
            @include('UI.recipes.myRecipes.buttons.ddList', ['size'=>'sm'])
            @include('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'])
            <!-- @include('admin.recipes.buttons.add', ['size'=>'sm']) -->
         </div> --}}
         <div class="btn-group">
            <a href="{{ route('recipes.favoriteRecipesGrid', 'all') }}" class="btn btn-sm btn-maroon">
               <i class="{{ config('icons.grid') }}"></i>
               Grid
            </a>
            <a href="{{ route('recipes.favoriteRecipesList', 'all') }}" class="btn btn-sm btn-light">
               <i class="{{ config('icons.list') }}"></i>
               List
            </a>
         </div>
      </span>
   </div>
</div>
