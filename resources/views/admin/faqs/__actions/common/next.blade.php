@if($next)
   <a href="{{ route('admin.faqs.show', $next) }}"
      class="btn btn-block btn-outline-secondary"
      title="Next Question">
      Next Question
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
