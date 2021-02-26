@can('tag-edit')
   <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-sm btn-default" title="Edit tag">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
