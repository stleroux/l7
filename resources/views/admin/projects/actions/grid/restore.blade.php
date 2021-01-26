<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $project->id }}"
   data-url="{{ url('admin/projects/restore', $project) }}"
   title="Restore Project"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
