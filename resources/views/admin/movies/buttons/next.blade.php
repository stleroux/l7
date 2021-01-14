@if($next)
   <a href="{{ route('admin.movies.show', $next) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Next Movie">
      View Next
      <i class="{{ config('buttons.next') }}"></i>
   </a>
@endif
