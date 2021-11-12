@if(!$offering->deleted_at)
   
   {{-- @include('admin.actions.grid.resetViews', ['modelName'=>'offering', 'model'=>$offering]) --}}
  {{--  @if($offering->is_published)
      @include('admin.actions.grid.unpublish', ['modelName'=>'offering', 'model'=>$offering])
   @else
      @include('admin.actions.grid.publish', ['modelName'=>'offering', 'model'=>$offering])
   @endif --}}
   
   @if($offering->id > 1)
      @include('admin.actions.grid.edit', ['modelName'=>'offering', 'model'=>$offering])
   @endif
   
   @include('admin.actions.grid.destroy', ['modelName'=>'offering', 'model'=>$offering])
@endif

@if($offering->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'offering', 'model'=>$offering])
   @include('admin.actions.grid.delete', ['modelName'=>'offering', 'model'=>$offering])
@endif
