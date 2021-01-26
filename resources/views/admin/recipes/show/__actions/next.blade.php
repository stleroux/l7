@if($next)
   <a href="{{ route('admin.recipes.show', $next) }}"
      class="btn btn-block btn-default"
      title="Next Recipe">
      <i class="{{ config('icons.next') }}"></i>
      Next
   </a>
@endif
