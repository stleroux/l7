<div class="row">

   <div class="col mb-2 text-center">

      @if($previous)
         <a href="{{ route('projects.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="{{ Config::get('icons.previous') }}"></i>
            Previous Project
         </a>
      @endif

      @if($next)
         <a href="{{ route('projects.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="{{ Config::get('icons.next') }}"></i>
         </a>
      @endif

   </div>

   <div class="col mb-2 text-right">
      <a href="{{ route('projects.index') }}"
         class="btn btn-sm btn-light border">
         <i class="{{ Config::get('icons.back') }}"></i>
         Back
      </a>
   </div>
   
</div>
