<a href="{{ Session::get('fromPage') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
   title="Back">
   <i class="{{ config('icons.back') }}"></i>
   {{ $btn_label ?? '' }}
</a>
