@if($next)
   <a href="{{ route('admin.recipes.show', $next) }}"
      class="btn btn-block btn-outline-secondary"
      title="Next Recipe">
      Next Recipe
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
