@can('faq-edit')
   <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-default" title="Edit faq">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      {{-- Edit --}}
   </a>
@endcan
