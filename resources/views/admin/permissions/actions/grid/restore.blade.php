<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $permission->id }}"
   data-url="{{ url('admin/permissions/restore', $permission) }}"
   title="Restore Permission"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
