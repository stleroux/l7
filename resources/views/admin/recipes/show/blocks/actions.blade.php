<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
		@include('admin.recipes.actions.common.back')
		@include('admin.recipes.actions.common.next')
		@include('admin.recipes.actions.common.previous')
      @include('admin.recipes.actions.common.edit')
      @include('admin.recipes.actions.common.publishUnpublish')
      @include('admin.recipes.actions.common.print')
      @include('admin.recipes.actions.common.printToPDF')
   </div>

</div>
