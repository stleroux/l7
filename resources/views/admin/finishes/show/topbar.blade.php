<div class="row mb-2">

   <div class="col">
      @can('project_finishes-create')
         <a href="{{ route('admin.finishes.edit', $finish->id) }}" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.edit') }}"></i>
            Edit Finish
         </a>
      @endcan

      <a href="{{ route('admin.finishes.index') }}"
         class="btn btn-sm btn-light border">
         <i class="{{ config('icons.back') }}"></i>
         Back
      </a>
   </div>

   <div class="col">

      <div class="float-right px-1">
         {{-- <a href="{{ route('admin.index') }}"
            class="btn btn-sm btn-{{ Route::is('admin.index') ? 'secondary' : 'primary' }} text-light"
            title="Finishes">
            <i class="{{ config('icons.projects') }}"></i>
            Projects
         </a> --}}
{{--          @can('project_materials-manage')
            <a href="{{ route('admin.materials.index') }}"
               class="btn btn-sm btn-{{ Route::is('admin.materials.index') ? 'secondary' : 'primary' }} text-light"
               title="Materials">
               <i class="{{ config('icons.materials') }}"></i>
               Materials
            </a>
         @endcan --}}
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ config('icons.help') }}"></i>
            Help
         </a>
      </div>
      
   </div>

</div>
