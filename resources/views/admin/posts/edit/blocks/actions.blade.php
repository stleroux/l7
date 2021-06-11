<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'post'])
      @include('admin.actions.common.updateAndClose')
      @include('admin.actions.common.updateAndContinue')
      @include('admin.actions.common.reset')
      @include('admin.actions.common.deletePostImage')
   </div>

</div>
