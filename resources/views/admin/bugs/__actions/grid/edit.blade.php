@can('bug-edit')
   <a href="{{ route('admin.bugs.edit', $bug) }}" class="btn btn-sm btn-default" title="Edit Bug">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
