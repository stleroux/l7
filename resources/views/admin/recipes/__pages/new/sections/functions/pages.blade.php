<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.recipes.index') }}"
         class="btn btn-block btn-default" {{ request()->routeIs('admin.recipes.index') ? 'active' : '' }}>
         <i class="{{ config('icons.recipes') }}"></i>
         Published Recipes
      </a>
   
      <a href="{{ route('admin.recipes.unpublished') }}"
         class="btn btn-block btn-default" {{ request()->routeIs('admin.recipes.unpublished') ? 'active' : '' }}>
         <i class="{{ config('icons.recipes') }}"></i>
         Unpublished Recipes
      </a>
   
      <a href="{{ route('admin.recipes.newRecipes') }}"
         class="btn btn-block btn-default" {{ request()->routeIs('admin.recipes.newRecipes') ? 'active' : '' }}>
         <i class="{{ config('icons.recipes') }}"></i>
         New Recipes
      </a>
   
      <a href="{{ route('admin.recipes.future') }}"
         class="btn btn-block btn-default" {{ request()->routeIs('admin.recipes.future') ? 'active' : '' }}>
         <i class="{{ config('icons.recipes') }}"></i>
         Future Recipes
      </a>
   
      <a href="{{ route('admin.recipes.trashed') }}"
         class="btn btn-block btn-default" {{ request()->routeIs('admin.recipes.trashed') ? 'active' : '' }}>
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Recipes
      </a>
      
   </div>
</div>
