@if($previous)
   <a href="{{ route('admin.carvings.show', $previous) }}"
      class="btn btn-block btn-secondary"
      title="Previous Carving">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Carving
   </a>
@endif
