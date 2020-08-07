@if($previous)
   <a href="{{ route('recipes.show', $previous) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light col-2 col-xl-4"
      title="Previous Recipe">
      <i class="{{ Config::get('icons.previous') }}"></i>
      {{-- Previous --}}
      <div class="d-none d-lg-inline col-xl-4">
      	{{ $btn_label ?? '' }}
		</div>
   </a>
@endif
