<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'offering'])
		@include('admin.actions.common.previous', ['modelName'=>'offering', 'model'=>$offering])
		@include('admin.actions.common.next', ['modelName'=>'offering', 'model'=>$offering])
      @include('admin.actions.common.edit', ['modelName'=>'offering', 'model'=>$offering])
   </div>
   
</div>
