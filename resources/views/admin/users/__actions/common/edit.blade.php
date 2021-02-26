@can('user-edit')
   <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
