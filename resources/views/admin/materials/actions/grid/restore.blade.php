<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $material->id }}"
   data-url="{{ url('admin/materials/restore', $material) }}"
   title="Restore Material"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
