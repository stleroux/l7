<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'feature'])
      @include('admin.actions.common.saveAndClose')
      @include('admin.actions.common.saveAndContinue')
      @include('admin.actions.common.saveAndNew')
      @include('admin.actions.common.reset')
   </div>

</div>
