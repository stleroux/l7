<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'category', 'model'=>$category])
      @include('admin.actions.common.updateAndClose', ['modelName'=>'category', 'model'=>$category])
      @include('admin.actions.common.updateAndContinue', ['modelName'=>'category', 'model'=>$category])
      @include('admin.actions.common.reset', ['modelName'=>'category', 'model'=>$category])
   </div>

</div>
