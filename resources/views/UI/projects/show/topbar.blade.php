<div class="row">

   <div class="col mb-2 text-center">

      @if($previous)
         <a href="{{ route('projects.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="{{ config('icons.previous') }}"></i>
            Previous Project
         </a>
      @endif

      @if($next)
         <a href="{{ route('projects.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
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

      @if (url()->previous() == request()->root() . '/UI/search')
         <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
      @endif

      <a href="{{ route('projects.index') }}"
         class="btn btn-sm btn-secondary">
         <i class="{{ config('icons.back') }}"></i>
         Projects
      </a>
   </div>
   
</div>
