<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
		{{-- @include('admin.carvings.actions.common.back')
      @include('admin.carvings.actions.common.updateAndClose')
      @include('admin.carvings.actions.common.updateAndContinue')
      @include('admin.carvings.actions.common.reset') --}}
      @include('admin.actions.common.back', ['modelName'=>'carving'])
      @include('admin.actions.common.updateAndClose')
      @include('admin.actions.common.updateAndContinue')
      @include('admin.actions.common.reset')
      @include('admin.actions.common.deleteJobSheet')
   </div>

</div>
