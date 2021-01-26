<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $user->id }}"
   data-url="{{ url('admin/users/delete', $user->id) }}"
   title="Delete User Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
