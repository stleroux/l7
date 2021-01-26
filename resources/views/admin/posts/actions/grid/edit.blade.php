@can('post-edit')
   <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-default" title="Edit post">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
