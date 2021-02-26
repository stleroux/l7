<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'carving'])
		@include('admin.actions.common.previous', ['modelName'=>'carving', 'model'=>$carving])
		@include('admin.actions.common.next', ['modelName'=>'carving', 'model'=>$carving])
      @include('admin.actions.common.edit', ['modelName'=>'carving', 'model'=>$carving])
   </div>
</div>
