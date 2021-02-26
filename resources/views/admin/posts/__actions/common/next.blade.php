@if($next)
   <a href="{{ route('admin.posts.show', $next) }}"
      class="btn btn-block btn-outline-secondary"
      title="Next Post">
      Next Post
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
