<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.recipes.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.recipes.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.recipes') }}"></i>
         Published Recipes 
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Recipe::published()->count() }}
         </div>
      </a>

      <a href="{{ route('admin.recipes.unpublished') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.recipes.unpublished') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.recipes') }}"></i>
         Unpublished Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Recipe::unpublished()->count() }}
         </div>
      </a>
   
      <a href="{{ route('admin.recipes.newRecipes') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.recipes.newRecipes') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.recipes') }}"></i>
         New Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Recipe::newRecipes()->count() }}
         </div>
      </a>
   
      <a href="{{ route('admin.recipes.future') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.recipes.future') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.recipes') }}"></i>
         Future Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Recipe::future()->count() }}
         </div>
      </a>
   
      <a href="{{ route('admin.recipes.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.recipes.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Recipe::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
