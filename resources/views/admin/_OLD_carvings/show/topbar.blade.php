<div class="row-col mb-2">

   <a href="{{ route('admin.projects.carvings.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>

   @can('project-edit')
      <a href="{{ route('admin.projects.carvings.edit', $carving) }}" class="btn btn-sm btn-primary">
         <i class="{{ config('icons.edit') }}"></i>
         Edit
      </a>
   @endcan

   <div class="float-right">

      @if($previous)
         <a href="{{ route('admin.projects.carvings.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="{{ config('icons.previous') }}"></i>
            Previous Project
         </a>
      @endif

      @if($next)
         <a href="{{ route('admin.projects.carvings.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="{{ config('icons.next') }}"></i>
         </a>
      @endif

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="{{ config('icons.help') }}"></i>
         Help
      </a>

   </div>
   
</div>
