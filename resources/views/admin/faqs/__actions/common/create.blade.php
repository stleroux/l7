@can('faq-create')
   <a href="{{ route('admin.faqs.create') }}" class="btn btn-block btn-outline-success" title="Create Question">
      <i class="{{ config('icons.add') }}"></i>
      <div class="d-none d-lg-inline">
         Create Question
      </div>
   </a>
@endcan
