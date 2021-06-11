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

   <div class="col mb-2 float-right px-1">
      @include('common.likeTopbar', ['model' => $carving])
   </div>

   <div class="d-flex mb-2">
      <div class="float-right">
         

{{--       <a href="#"
         class="btn btn-sm btn-dark">
         <i class="{{ config('icons.addToCart') }}"></i>
         Add to Cart
      </a> --}}

      <a href="{{ route('carvings.faq') }}"
         class="btn btn-sm btn-secondary">
         <i class="{{ config('icons.faq') }}"></i>
         FAQ
      </a>

      @if (url()->previous() == request()->root() . '/UI/search')
         <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
      @endif

      @if(Session::get('fromPage'))
         <a href="{{ Session::get('fromPage') }}"
            class="btn btn-sm btn-secondary d-print-none"
            title="Back">
            <i class="{{ config('icons.back') }}"></i>
            <div class="d-none d-lg-inline">
               Carvings
               {{-- {{ $btn_label ?? '' }} --}}
            </div>
         </a>
      @else
         <a href="{{ route('carvings.index') }}"
            class="btn btn-sm btn-secondary">
            <i class="{{ config('icons.back') }}"></i>
            Carvings
         </a>
      @endif


      </div>

   </div>

   
</div>
