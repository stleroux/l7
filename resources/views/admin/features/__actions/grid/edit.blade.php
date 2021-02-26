@can('feature-edit')
   <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-sm btn-default" title="Edit feature">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
