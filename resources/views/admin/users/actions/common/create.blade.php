@can('user-create')
   <a href="{{ route('admin.users.create') }}" class="btn btn-block btn-outline-success" title="Create User">
      <i class="{{ config('icons.add') }}"></i>
      Create User
   </a>
@endcan
