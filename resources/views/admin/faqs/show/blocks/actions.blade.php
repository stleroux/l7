<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'faq'])
		@include('admin.actions.common.previous', ['modelName'=>'faq', 'model'=>$faq])
		@include('admin.actions.common.next', ['modelName'=>'faq', 'model'=>$faq])
      @include('admin.actions.common.edit', ['modelName'=>'faq', 'model'=>$faq])
   </div>
   
</div>
