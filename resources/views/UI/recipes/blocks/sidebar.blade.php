@auth

   <div class="card card-trans-4 mb-2" style="background-color: #800000">

      <div class="card-header text-light p-2">
         <i class="{{ config('icons.recipes') }}"></i>
         Recipes
      </div>

      <div class="card-body card-trans-6 p-0 m-0">
         
         <ul class="list-group">
            
            <a href="{{ route('recipes.myRecipesGrid', 'all') }}"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     {{ (route('recipes.myRecipesGrid', 'all') === url()->current()) || (route('recipes.myRecipesList', 'all') === url()->current()) ? 'recipeActive' : '' }}
            ">
               <i class="{{ config('icons.mine') }}"></i>
               My Recipes
            </a>

@if($privateRecipesCount > 0)
            <a href="{{ route('recipes.privateRecipesGrid', 'all') }}"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     {{ (route('recipes.privateRecipesGrid', 'all') === url()->current()) || (route('recipes.privateRecipesList', 'all') === url()->current()) ? 'recipeActive' : '' }}
            ">
               <i class="{{ config('icons.private') }}"></i>
               My Private Recipes
            </a>
@endif

            <a href="{{ route('recipes.favoriteRecipesGrid', 'all') }}"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     {{ (route('recipes.favoriteRecipesGrid', 'all') === url()->current()) || (route('recipes.favoriteRecipesList', 'all') === url()->current()) ? 'recipeActive' : '' }}
            ">
               <i class="{{ config('icons.favorite') }}"></i>
               My Favorite Recipes
            </a>

         </ul>

      </div>



      {{-- <div class="list-group pt-0 pb-0"> --}}

         {{-- @if(checkPerm('recipe_browse'))
            <a href="{{ route('admin.recipes.index') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('admin.recipes.index') ? 'active' : '' }}">
               <i class="fab fa-apple fa-fw"></i>
               Published Recipes
            </a>
         @endif

         @if(checkPerm('recipe_edit'))
            <a href="{{ route('admin.recipes.unpublished') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('admin.recipes.unpublished') ? 'active' : '' }}">
               <i class="fas fa-clipboard-list fa-fw"></i>
               Unpublished Recipes
            </a>

            <a href="{{ route('admin.recipes.newRecipes') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('admin.recipes.newRecipes') ? 'active' : '' }}">
               <i class="fas fa-clipboard-list fa-fw"></i>
               New Recipes
            </a>

            <a href="{{ route('admin.recipes.future') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('admin.recipes.future') ? 'active' : '' }}">
               <i class="fas fa-clipboard-list fa-fw"></i>
               Future Recipes
            </a>

            <a href="{{ route('admin.recipes.trashed') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('admin.recipes.trashed') ? 'active' : '' }}">
               <i class="fas fa-clipboard-list fa-fw"></i>
               Trashed Recipes
            </a>
         @endif --}}

{{--             <a href="{{ route('recipes.myRecipesGrid') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myRecipes*') ? 'active' : '' }}">
               <i class="{{ config('icons.mine') }}"></i>
               My Recipes
            </a>

            <a href="{{ route('recipes.myPrivateRecipes') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myPrivateRecipes') ? 'active' : '' }}">
               <i class="{{ config('icons.private') }}"></i>
               My Private Recipes
            </a>

            <a href="{{ route('recipes.myFavoriteRecipes') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myFavoriteRecipes') ? 'active' : '' }}">
               <i class="{{ config('icons.favorite') }}"></i>
               My Favorite Recipes
            </a> --}}

         {{-- <hr /> --}}

         {{-- @if(checkPerm('recipe_edit'))
            <a href="<!-- {{ route('recipes.import') }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="fa fa-upload fa-fw"></i>
                  Import
               </span>
            </a>

            <a href="<!-- {{ URL::to('recipes/downloadExcel/xls') }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="fas fa-file-excel fa-fw"></i>
                  Download All as XLS
               </span>
            </a>

            <a href="<!-- {{ URL::to('recipes/downloadExcel/xlsx') }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="far fa-file-excel fa-fw"></i>
                  Download All as XLSX
               </span>
            </a>

            <a href="<!-- {{ URL::to('recipes/downloadExcel/csv') }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="fas fa-file-csv fa-fw"></i>
                  Download All as CSV
               </span>
            </a>

            <a href="<!-- {{ route('recipes.pdfview') }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="fas fa-file-pdf fa-fw"></i>
                  Preview All as PDF
               </span>
            </a>

            <a href="<!-- {{ route('recipes.pdfview',['download'=>'pdf']) }} -->" class="list-group-item list-group-item-action p-1 {{ Route::is('/') ? 'active' : '' }}">
               <span class="text-danger">
                  <i class="far fa-file-pdf fa-fw"></i>
                  Download All to PDF
               </span>
            </a>
         @endif --}}

      {{-- </div> --}}
   </div>

@endauth