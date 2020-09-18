<a href="{{ Session::get('fromPage') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary d-print-none"
   title="Back">
   <i class="{{ Config::get('icons.back') }}"></i>
   {{ $btn_label ?? 'Back' }}
</a>
