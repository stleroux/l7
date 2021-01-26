@can('role-edit')
   <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-default" title="Edit Role">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
