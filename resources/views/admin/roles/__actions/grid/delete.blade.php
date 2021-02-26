<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $role->id }}"
   data-url="{{ url('admin/roles/delete', $role->id) }}"
   title="Delete Role Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
