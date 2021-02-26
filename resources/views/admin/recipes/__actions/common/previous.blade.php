@if($previous)
   <a href="{{ route('admin.recipes.show', $previous) }}"
      class="btn btn-block btn-outline-secondary"
      title="Previous Recipe">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Recipe
   </a>
@endif
