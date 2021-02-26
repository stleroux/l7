<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $bug->id }}"
   data-url="{{ url('admin/bugs/restore', $bug) }}"
   title="Restore Bug"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
