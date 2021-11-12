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

   @auth
      <div class="col mb-2 float-right px-1">
         <div class="form-inline float-right p-0 m-0">
            @can('like', $carving)
               <form class="p-0 m-0" action="{{ route('like') }}" method="POST">
                  @csrf
                  <input type="hidden" name="likeable_type" value="{{ get_class($carving) }}"/>
                  <input type="hidden" name="id" value="{{ $carving->id }}"/>
                  <button class="btn btn-sm btn-success">@lang('Like')</button>
               </form>
            @else
               <form class="" action="{{ route('unlike') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="likeable_type" value="{{ get_class($carving) }}"/>
                  <input type="hidden" name="id" value="{{ $carving->id }}"/>
                  <button class="btn btn-sm btn-danger">@lang('Unlike')</button>
               </form>
            @endcan
         </div>
      </div>
   @endauth

   <div class="d-flex mb-2">
      <form action="{{ route('cart.store', $carving) }}" method="POST" class="form-inline pr-1">
         @csrf
         <input type="hidden" value="1" name="quantity">
         <button type="submit" class="btn btn-block btn-sm btn-secondary text-light">Request a Quote</button>
      </form>

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
