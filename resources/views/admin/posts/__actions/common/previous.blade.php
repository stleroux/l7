@if($previous)
   <a href="{{ route('admin.posts.show', $previous) }}"
      class="btn btn-block btn-outline-secondary"
      title="Previous Post">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Post
   </a>
@endif
