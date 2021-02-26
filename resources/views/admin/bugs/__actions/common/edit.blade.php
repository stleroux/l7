@can('bug-edit')
   <a href="{{ route('admin.bugs.edit', $bug) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
