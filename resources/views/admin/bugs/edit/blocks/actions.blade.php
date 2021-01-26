<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
		@include('admin.bugs.actions.common.back')
      @include('admin.bugs.actions.common.updateAndClose')
      @include('admin.bugs.actions.common.updateAndContinue')
      @include('admin.bugs.actions.common.reset')
		{{-- @include('admin.bugs.actions.common.back', ['modelName'=>'bug'])
      @include('admin.bugs.actions.common.updateAndClose')
      @include('admin.bugs.actions.common.updateAndContinue')
      @include('admin.bugs.actions.common.reset') --}}
   </div>

</div>
