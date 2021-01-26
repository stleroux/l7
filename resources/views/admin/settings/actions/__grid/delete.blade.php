<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $feature->id }}"
   data-url="{{ url('admin/features/delete', $feature->id) }}"
   title="Delete Feature Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
