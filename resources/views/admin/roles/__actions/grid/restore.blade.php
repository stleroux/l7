<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $role->id }}"
   data-url="{{ url('admin/roles/restore', $role) }}"
   title="Restore Role"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
