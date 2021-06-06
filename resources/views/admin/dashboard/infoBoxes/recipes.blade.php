<!-- RECIPES -->

<div class="col col-md-6 col-xl-12">
   <a href="{{ route('admin.recipes.index') }}">
      <div class="info-box">
         <span class="info-box-icon bg-info elevation-1">
            <i class="{{ config('icons.recipes') }}"></i>
         </span>

         <div class="info-box-content">
            <span class="info-box-text h4">Recipes</span>
            @if(Auth::user()->can('recipe-list'))
               <span class="info-box-text">
                  Published : {{ $userRecipesPublishedCount }}
                  <br />
                  Unpublished : {{ $userRecipesUnpublishedCount }}
                  <br />
                  Future : {{ $userRecipesFutureCount }}
                  <br />
                  Trashed : {{ $userRecipesTrashedCount }}
                  <br />
                  <span class="info-box-number">
                     Total : {{ $userRecipesTotalCount }}
                     <br />
                     Overall Total : {{ $recipesCount }}                     
                  </span>
               </span>
            @else
               <span class="info-box-number">
                  Total : {{ $recipesCount }}
               </span>
            @endif

         </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
   </a>
</div><!-- /.col -->