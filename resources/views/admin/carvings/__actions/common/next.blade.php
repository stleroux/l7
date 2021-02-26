@if($next)
   <a href="{{ route('admin.carvings.show', $next) }}"
      class="btn btn-block btn-secondary"
      title="Next Carving">
      Next Carving
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
