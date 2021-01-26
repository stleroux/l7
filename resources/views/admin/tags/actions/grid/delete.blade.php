<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $tag->id }}"
   data-url="{{ url('admin/tags/delete', $tag->id) }}"
   title="Delete Tag Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
