<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $finish->id }}"
   data-url="{{ url('admin/finishes/restore', $finish) }}"
   title="Restore Finish"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
