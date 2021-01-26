@if(!$project->deleted_at)
   @include('admin.projects.actions.grid.edit')
   @include('admin.projects.actions.grid.resetViews')
   @include('admin.projects.actions.grid.destroy')         
@endif

@if($project->deleted_at)
   @include('admin.projects.actions.grid.restore')
   @include('admin.projects.actions.grid.delete')
@endif
