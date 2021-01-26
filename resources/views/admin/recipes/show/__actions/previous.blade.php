@if($previous)
   <a href="{{ route('admin.recipes.show', $previous) }}"
      class="btn btn-block btn-default"
      title="Previous Recipe">
      <i class="{{ config('icons.previous') }}"></i>
      Previous
   </a>
@endif
