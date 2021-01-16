<a href="{{ route('admin.materials.index') }}"
   class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('material-create')
         <a href="{{ route('admin.materials.edit', $material->id) }}" class="btn btn-block btn-outline-primary">
            <i class="{{ config('icons.edit') }}"></i>
            Edit Material
         </a>
      @endcan
      
   </div>
</div>
