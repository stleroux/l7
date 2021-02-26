@can('faq-delete')
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $faq->id }}"
      data-url="{{ url('admin/faqs', $faq->id) }}"
      title="Trash Question">
      <i class="{{ config('icons.trash') }} text-pink"></i>
      {{-- Trash --}}
   </button>
@endcan
