@can('faq-manage')
   <button type="button"
      class="restore-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#restoreModal"
      data-id="{{ $faq->id }}"
      data-url="{{ url('admin/faqs/restore', $faq) }}"
      title="Restore Question">
      <i class="{{ config('icons.restore') }} text-primary"></i>
      {{-- Restore --}}
   </button>
@endcan
