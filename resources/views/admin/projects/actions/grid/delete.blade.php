<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $project->id }}"
   data-url="{{ url('admin/projects/delete', $project->id) }}"
   title="Delete Project Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
