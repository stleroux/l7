@if(!$material->deleted_at)

   @include('admin.materials.actions.grid.edit')
   @include('admin.materials.actions.grid.destroy')

@endif

@if($material->deleted_at)

   @can('material-manage')
      @include('admin.materials.actions.grid.restore')
      @include('admin.materials.actions.grid.delete')
   @endcan

@endif
