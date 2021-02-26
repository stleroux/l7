<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
      @include('admin.actions.common.back', ['modelName'=>'post'])
      {{-- @include('admin.actions.common.previous') --}}
      {{-- @include('admin.actions.common.next') --}}
      @include('admin.actions.common.edit', ['modelName'=>'post', 'model'=>$post])
   </div>

</div>
