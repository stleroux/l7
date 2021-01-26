@can('recipe-create')
   <a href="{{ route('admin.recipes.create') }}" class="btn btn-block btn-outline-success" title="Create Recipe">
      <i class="{{ config('icons.add') }}"></i>
      Create Recipe
   </a>
@endcan
