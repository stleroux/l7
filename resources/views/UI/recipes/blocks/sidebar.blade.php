@auth
   <div class="card card-trans-4 mb-2">
      <div class="card-header block_header p-2">
         <i class="{{ Config::get('icons.recipes') }}"></i>
         Recipes
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

         @auth
{{--             <a href="{{ route('recipes.myRecipesGrid') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myRecipes*') ? 'active' : '' }}">
               <i class="{{ Config::get('icons.mine') }}"></i>
               My Recipes
            </a>

            <a href="{{ route('recipes.myPrivateRecipes') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myPrivateRecipes') ? 'active' : '' }}">
               <i class="{{ Config::get('icons.private') }}"></i>
               My Private Recipes
            </a>

            <a href="{{ route('recipes.myFavoriteRecipes') }}" class="list-group-item list-group-item-action p-1 {{ Route::is('recipes.myFavoriteRecipes') ? 'active' : '' }}">
               <i class="{{ Config::get('icons.favorite') }}"></i>
               My Favorite Recipes
            </a> --}}

            <table class="table table-sm table-hover mb-0">
               <tbody>
                  <tr class="{{ Route::is('recipes.myRecipes*') ? 'bg-dark' : '' }}">
                     <td>
                        <a href="{{ route('recipes.myRecipesGrid', 'all') }}" class="text-light">
                           <i class="{{ Config::get('icons.mine') }}"></i>
                           My Recipes
                        </a>
                     </td>
                  </tr>
                  <tr class="{{ Route::is('recipes.privateRecipes*') ? 'bg-dark' : '' }}">
                     <td>
                        <a href="{{ route('recipes.privateRecipesGrid', 'all') }}" class="text-light">
                           <i class="{{ Config::get('icons.private') }}"></i>
                           My Private Recipes
                        </a>
                     </td>
                  </tr>
                  <tr class="{{ Route::is('recipes.favoriteRecipes*') ? 'bg-dark' : '' }}">
                     <td>
                        <a href="{{ route('recipes.favoriteRecipesGrid', 'all') }}" class="text-light">
                           <i class="{{ Config::get('icons.favorite') }}"></i>
                           My Favorite Recipes
                        </a>
                     </td>
                  </tr>
               </tbody>
               
            </table>
         @endauth

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