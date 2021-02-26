<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $recipe->id }}"
   data-url="{{ url('admin/recipes/delete', $recipe->id) }}"
   title="Delete Recipe Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
