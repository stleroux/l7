@can('post-edit')
   <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
