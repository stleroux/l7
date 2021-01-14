@if($previous)
   <a href="{{ route('carvings.show', $previous) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-sm-5"
      title="Previous Project">
      <i class="{{ config('icons.previous') }}"></i>
      {{-- Previous --}}
      {{ $btn_label ?? '' }}
   </a>
@endif
