@if($next)
   <a href="{{ route('blog.show', $next) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-2"
      title="Next Blog">
      {{-- Next --}}
      {{ $btn_label ?? 'Next ' }}
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
