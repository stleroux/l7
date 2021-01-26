<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $post->id }}"
   data-url="{{ url('admin/posts/restore', $post) }}"
   title="Restore Post"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
