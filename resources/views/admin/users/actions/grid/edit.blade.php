@can('user-edit')
   <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-default" title="Edit user">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
