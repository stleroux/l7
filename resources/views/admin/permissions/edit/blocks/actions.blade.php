<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      {{-- @include('admin.permissions.actions.common.back')
      @include('admin.permissions.actions.common.updateAndClose')
      @include('admin.permissions.actions.common.updateAndContinue')
      @include('admin.permissions.actions.common.reset') --}}
      @include('admin.actions.common.back', ['modelName'=>'permission'])
      @include('admin.actions.common.updateAndClose')
      @include('admin.actions.common.updateAndContinue')
      @include('admin.actions.common.reset')
   </div>

</div>
