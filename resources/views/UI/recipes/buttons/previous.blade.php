@if($previous)
   <a href="{{ route('recipes.show', [$previous, $byCatName]) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon text-light col-sm-4"
      title="Previous Recipe">
      <i class="{{ Config::get('icons.previous') }}"></i>
      {{-- Previous --}}
      {{ $btn_label ?? '' }}
   </a>
@endif
