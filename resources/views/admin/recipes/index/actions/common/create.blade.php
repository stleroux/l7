@can('recipe-create')
   <a href="{{ route('admin.recipes.create') }}" class="btn btn-block btn-outline-success">
      <i class="{{ config('icons.add') }}"></i>
      <div class="d-none d-lg-inline">
         Create Recipe
      </div>
   </a>
@endcan
