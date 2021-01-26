@if($previous)
   <a href="{{ route('admin.faqs.show', $previous) }}"
      class="btn btn-block btn-outline-secondary"
      title="Previous Question">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Question
   </a>
@endif
