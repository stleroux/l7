@can('tag-edit')
   <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
