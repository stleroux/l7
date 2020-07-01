<div class="row-col mb-2">

   <a href="{{ route('admin.projects.index') }}"
      class="btn btn-sm btn-light border">
      <i class="fas fa-chevron-circle-left nav-icon"></i>
      Back
   </a>

   <a href="#" class="btn btn-sm btn-light border float-right ml-2" data-toggle="modal" data-target="#helpModal">
      <i class="nav-icon fas fa-question-circle"></i>
      Help
   </a>

   @if($next)
      <a href="{{ route('admin.projects.show', $next) }}"
         class="btn btn-sm btn-secondary float-right ml-2"
         title="Next Project">
         Next Project
         <i class="{{ Config::get('buttons.next') }}"></i>
      </a>
   @endif

   @if($previous)
      <a href="{{ route('admin.projects.show', $previous) }}"
         class="btn btn-sm btn-secondary float-right ml-2"
         title="Previous Project">
         <i class="{{ Config::get('buttons.previous') }}"></i>
         Previous Project
      </a>
   @endif
   
</div>
