@if($previous)
   <a href="{{ route('movies.show', $previous) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Previous Movie">
      <i class="{{ config('buttons.previous') }}"></i>
      View Previous      
   </a>
@endif
