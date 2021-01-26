<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $recipe->id }}"
   data-url="{{ url('admin/recipes/restore', $recipe) }}"
   title="Restore Recipe"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
