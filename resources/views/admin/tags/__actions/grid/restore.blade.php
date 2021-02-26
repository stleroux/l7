<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $tag->id }}"
   data-url="{{ url('admin/tags/restore', $tag) }}"
   title="Restore Tag"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
