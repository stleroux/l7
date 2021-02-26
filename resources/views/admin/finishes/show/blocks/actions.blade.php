<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'finish'])
      @include('admin.actions.common.edit', ['modelName'=>'finish', 'model'=>$finish])
   </div>

</div>
