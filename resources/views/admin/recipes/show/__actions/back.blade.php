@if(Session::get('fromPage'))
   <a href="{{ Session::get('fromPage') }}"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>
@else
   <a href="\"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>
@endif
