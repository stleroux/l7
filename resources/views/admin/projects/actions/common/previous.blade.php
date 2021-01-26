@if($previous)
   <a href="{{ route('admin.projects.show', $previous) }}"
      class="btn btn-block btn-outline-secondary"
      title="Previous Project">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Project
   </a>
@endif
