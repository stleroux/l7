<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
		@include('admin.actions.common.back', ['modelName'=>'recipe'])
		@include('admin.actions.common.next', ['modelName'=>'recipe', 'model'=>$recipe])
		@include('admin.actions.common.previous', ['modelName'=>'recipe', 'model'=>$recipe])
      @include('admin.actions.common.edit', ['modelName'=>'recipe', 'model'=>$recipe])
      {{-- @include('admin.actions.common.publish', ['modelName'=>'recipe', 'model'=>$recipe]) --}}
      {{-- @include('admin.actions.common.unpublish', ['modelName'=>'recipe', 'model'=>$recipe]) --}}
      @include('admin.actions.common.publishUnpublish', ['modelName'=>'recipe', 'model'=>$recipe])
      @include('admin.actions.common.print', ['modelName'=>'recipe', 'model'=>$recipe])
      @include('admin.actions.common.printToPDF', ['modelName'=>'recipe', 'model'=>$recipe])
   </div>

</div>
