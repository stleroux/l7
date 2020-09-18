<div class="row-col mb-2">

   <a href="{{ route('admin.projects.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ Config::get('icons.back') }}"></i>
      Back
   </a>

   @can('project-edit')
      <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-primary">
         <i class="{{ Config::get('icons.edit') }}"></i>
         Edit
      </a>
   @endcan

   <div class="float-right">

      @if($previous)
         <a href="{{ route('admin.projects.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="{{ Config::get('icons.previous') }}"></i>
            Previous Project
         </a>
      @endif

      @if($next)
         <a href="{{ route('admin.projects.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="{{ Config::get('icons.next') }}"></i>
         </a>
      @endif

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="{{ Config::get('icons.help') }}"></i>
         Help
      </a>

   </div>
   
</div>