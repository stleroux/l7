@can('feature-edit')
   <a href="{{ route('admin.finishes.edit', $finish) }}" class="btn btn-sm btn-default" title="Edit feature">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
