@if($next)
   <a href="{{ route('recipes.show', [$next, $byCatName]) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon text-light col-sm-4"
      title="Next Recipe">
      {{-- Next --}}
      {{ $btn_label ?? '' }}
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
