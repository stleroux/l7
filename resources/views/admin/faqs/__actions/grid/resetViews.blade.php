@can('faq-manage')
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="{{ $faq->id }}"
      data-url="{{ url('admin/faqs/resetViews', $faq) }}"
      title="Reset Question Views"
      >
      <i class="{{ config('icons.resetViews') }} text-secondary"></i>
      {{-- Reset Views --}}
   </button>
@endcan
