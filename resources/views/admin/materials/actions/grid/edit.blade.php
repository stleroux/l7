@can('material-edit')
   <a href="{{ route('admin.materials.edit', $material) }}" class="btn btn-sm btn-default" title="Edit Material">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
