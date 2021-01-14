<div class="row">

   <div class="col mb-2 text-center">

      @if($previous)
         <a href="{{ route('carvings.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Carving">
            <i class="{{ config('icons.previous') }}"></i>
            Previous Carving
         </a>
      @endif

      @if($next)
         <a href="{{ route('carvings.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Carving">
            Next Carving
            <i class="{{ config('icons.next') }}"></i>
         </a>
      @endif

   </div>

   <div class="col mb-2 text-right">

      <a href="#"
         class="btn btn-sm btn-dark">
         <i class="{{ config('icons.addToCart') }}"></i>
         Add to Cart
      </a>

      <a href="{{ route('carvings.faq') }}"
         class="btn btn-sm btn-secondary">
         <i class="{{ config('icons.faq') }}"></i>
         FAQ
      </a>

      @if(Session::get('fromPage'))
         <a href="{{ Session::get('fromPage') }}"
            class="btn btn-sm btn-secondary d-print-none"
            title="Back">
            <i class="{{ config('icons.back') }}"></i>
            <div class="d-none d-lg-inline">
               Back
               {{-- {{ $btn_label ?? '' }} --}}
            </div>
         </a>
      @else
         <a href="{{ route('carvings.index') }}"
            class="btn btn-sm btn-secondary">
            <i class="{{ config('icons.back') }}"></i>
            Back
         </a>
      @endif
   </div>
   
</div>
