<a href="{{ route('admin.carvings.index') }}"
   class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>

@if($previous)
   <a href="{{ route('admin.carvings.show', $previous) }}"
      class="btn btn-block btn-secondary"
      title="Previous Carving">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Carving
   </a>
@endif

@if($next)
   <a href="{{ route('admin.carvings.show', $next) }}"
      class="btn btn-block btn-secondary"
      title="Next Carving">
      Next Carving
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('carving-edit')
         <a href="{{ route('admin.carvings.edit', $carving) }}" class="btn btn-block btn-outline-primary">
            <i class="{{ config('icons.edit') }}"></i>
            Edit
         </a>
      @endcan

   </div>
</div>
