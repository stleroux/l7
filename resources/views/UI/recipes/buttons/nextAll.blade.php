@if($next)
   <a href="{{ route('recipes.show', $next) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon text-light col-2 col-xl-4"
      title="Next Recipe">
      {{-- Next --}}
      <div class="d-none d-lg-inline col-xl-4">
      	{{ $btn_label ?? '' }}
      </div>
      <i class="{{ Config::get('icons.next') }}"></i>
   </a>
@endif
