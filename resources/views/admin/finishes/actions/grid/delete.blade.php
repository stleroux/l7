<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $finish->id }}"
   data-url="{{ url('admin/finishes/delete', $finish->id) }}"
   title="Delete Finish Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
