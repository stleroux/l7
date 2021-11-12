{{-- NON REGISTERED --}}
@guest
   <div class="card card-trans-0 mb-2 border-red-2">

      <div class="card-header section_header p-2">
         <i class="{{ config('icons.ban') }}"></i>
         {{ $nonRegistered->title }}
      </div>

      <div class="card-body card-trans-4 p-2">
         {!! $nonRegistered->body !!}
      </div>

   </div>
@endguest
