@if(!$bug->deleted_at)

   @include('admin.bugs.actions.grid.edit')
   @include('admin.bugs.actions.grid.destroy')

@endif

@if($bug->deleted_at)

   @can('bug-manage')
      @include('admin.bugs.actions.grid.restore')
      @include('admin.bugs.actions.grid.delete')
   @endcan

@endif
