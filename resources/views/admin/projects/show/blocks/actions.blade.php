<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'project'])
      @include('admin.actions.common.previous', ['modelName'=>'project', 'model'=>$project])
      @include('admin.actions.common.next', ['modelName'=>'project', 'model'=>$project])
      @include('admin.actions.common.edit', ['modelName'=>'project', 'model'=>$project])
   </div>

</div>
