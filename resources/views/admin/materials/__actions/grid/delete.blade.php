<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $material->id }}"
   data-url="{{ url('admin/materials/delete', $material->id) }}"
   title="Delete Material Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
