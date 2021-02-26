<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $bug->id }}"
   data-url="{{ url('admin/bugs/delete', $bug->id) }}"
   title="Delete Bug Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
