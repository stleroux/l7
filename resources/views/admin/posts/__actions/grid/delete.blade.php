<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $post->id }}"
   data-url="{{ url('admin/posts/delete', $post->id) }}"
   title="Delete Post Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
