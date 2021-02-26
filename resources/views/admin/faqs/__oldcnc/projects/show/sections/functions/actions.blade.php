<a href="{{ route('admin.projects.index') }}"
   class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>

@if($previous)
   <a href="{{ route('admin.projects.show', $previous) }}"
      class="btn btn-block btn-secondary"
      title="Previous Project">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Project
   </a>
@endif

@if($next)
   <a href="{{ route('admin.projects.show', $next) }}"
      class="btn btn-block btn-secondary"
      title="Next Project">
      Next Project
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('project-edit')
         <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-block btn-outline-primary">
            <i class="{{ config('icons.edit') }}"></i>
            Edit
         </a>
      @endcan

   </div>
</div>
