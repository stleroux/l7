<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $feature->id }}"
   data-url="{{ url('admin/features/restore', $feature) }}"
   title="Restore Feature"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
