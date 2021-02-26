@if(!$faq->deleted_at)
   @include('admin.actions.grid.edit', ['modelName'=>'faq', 'model'=>$faq])
   @include('admin.actions.grid.resetViews', ['modelName'=>'faq', 'model'=>$faq])
   @include('admin.actions.grid.destroy', ['modelName'=>'faq', 'model'=>$faq])
@endif

@if($faq->deleted_at)
   @include('admin.actions.grid.restore', ['modelName'=>'faq', 'model'=>$faq])
   @include('admin.actions.grid.delete', ['modelName'=>'faq', 'model'=>$faq])
@endif
