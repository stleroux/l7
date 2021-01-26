@can('recipe-edit')
   <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-default" title="Edit recipe">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
