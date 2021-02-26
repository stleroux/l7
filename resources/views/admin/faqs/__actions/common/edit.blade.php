@can('faq-edit')
   <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
