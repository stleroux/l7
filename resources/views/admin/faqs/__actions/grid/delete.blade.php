@can('faq-manage')
   <!-- CANNOT use a link here, must use a button -->
   <button type="button"
      class="delete-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#deleteModal"
      data-id="{{ $faq->id }}"
      data-url="{{ url('admin/faqs/delete', $faq->id) }}"
      title="Permanently Delete Question">
      <i class="{{ config('icons.delete') }} text-danger"></i>
      {{-- Delete Permanently --}}
   </button>
@endcan
