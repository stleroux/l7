<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $modelName->id }}"
   data-url="{{ url('admin/'.$modelNames.'s/restore', $modelName) }}"
   title="Restore {{ ucfirst($modelName) }}"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
