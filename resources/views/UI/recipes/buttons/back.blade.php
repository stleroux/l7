@if(Session::get('fromPage'))
   <a href="{{ Session::get('fromPage') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon d-print-none"
      title="Back">
      <i class="{{ Config::get('icons.back') }}"></i>
      {{-- Back --}}
      <div class="d-none d-lg-inline">
         {{ $btn_label ?? '' }}
      </div>
   </a>
{{-- @else
   <a href="{{ url()->previous() }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary d-print-none"
      title="Back">
      <i class="{{ Config::get('buttons.back') }}"></i>
      {{ $btn_label ?? '' }}
   </a> --}}
@endif
