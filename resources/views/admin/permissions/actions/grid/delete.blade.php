<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $permission->id }}"
   data-url="{{ url('admin/permissions/delete', $permission->id) }}"
   title="Delete Permission Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
