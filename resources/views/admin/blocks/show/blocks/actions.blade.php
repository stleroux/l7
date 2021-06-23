<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
		{{-- @include('admin.bugs.actions.common.back') --}}
		{{-- @include('admin.bugs.actions.common.edit') --}}
		@include('admin.actions.common.back', ['modelName'=>'block'])
		@include('admin.actions.common.edit', ['modelName'=>'block', 'model'=>$block])
	</div>

</div>
