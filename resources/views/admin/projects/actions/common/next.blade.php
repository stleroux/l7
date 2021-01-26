@if($next)
   <a href="{{ route('admin.projects.show', $next) }}"
      class="btn btn-block btn-outline-secondary"
      title="Next Project">
      Next Project
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
