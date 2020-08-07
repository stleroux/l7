<a href="{{ Session::get('fromPage') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
   title="Back">
   <i class="{{ Config::get('icons.back') }}"></i>
   {{-- Back --}}
   {{ $btn_label ?? '' }}
</a>
