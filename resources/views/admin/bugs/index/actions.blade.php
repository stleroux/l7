@if(!$bug->deleted_at)

   {{-- @include('admin.bugs.actions.grid.edit')
   @include('admin.bugs.actions.grid.destroy') --}}
   @include('admin.actions.grid.edit', ['modelName'=>'bug', 'model'=>$bug])
   @include('admin.actions.grid.destroy', ['modelName'=>'bug', 'model'=>$bug])
   {{-- @include('admin.actions.grid.destroy', $bug) --}}

@endif

@if($bug->deleted_at)

   @can('bug-manage')
      @include('admin.actions.grid.restore', ['modelName'=>'bug', 'model'=>$bug])
      @include('admin.actions.grid.delete', ['modelName'=>'bug', 'model'=>$bug])
   @endcan

@endif
