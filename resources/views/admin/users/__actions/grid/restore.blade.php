<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $user->id }}"
   data-url="{{ url('admin/users/restore', $user) }}"
   title="Restore User"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
