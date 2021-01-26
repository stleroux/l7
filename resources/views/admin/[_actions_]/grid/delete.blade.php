<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $modelName->id }}"
   data-url="{{ url('admin/'.$modelName.'s/delete', $modelName->id) }}"
   title="Delete  {{ ucfirst($modelName) }} Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
