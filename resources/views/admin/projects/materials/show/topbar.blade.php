<div class="row mb-2">

   <div class="col">
      @can('project_materials-create')
         <a href="{{ route('admin.projects.materials.edit', $material->id) }}" class="btn btn-sm btn-primary">
            <i class="{{ Config::get('icons.edit') }}"></i>
            Edit Material
         </a>
      @endcan

      <a href="{{ route('admin.projects.materials.index') }}"
         class="btn btn-sm btn-light border">
         <i class="{{ Config::get('icons.back') }}"></i>
         Back
      </a>
   </div>

   <div class="col">

      <div class="float-right px-1">
         {{-- <a href="{{ route('admin.projects.index') }}"
            class="btn btn-sm btn-{{ Route::is('admin.projects.index') ? 'secondary' : 'primary' }} text-light"
            title="Finishes">
            <i class="{{ Config::get('icons.projects') }}"></i>
            Projects
         </a> --}}
{{--          @can('project_materials-manage')
            <a href="{{ route('admin.projects.materials.index') }}"
               class="btn btn-sm btn-{{ Route::is('admin.projects.materials.index') ? 'secondary' : 'primary' }} text-light"
               title="Materials">
               <i class="{{ Config::get('icons.materials') }}"></i>
               Materials
            </a>
         @endcan --}}
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ Config::get('icons.help') }}"></i>
            Help
         </a>
      </div>
      
   </div>

</div>
