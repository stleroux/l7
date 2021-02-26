<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @include('admin.actions.common.create', ['modelName'=>'faq'])

      @if(Route::currentRouteName() == 'admin.faqs.index')
         @include('admin.actions.mass.destroy', ['modelName'=>'faq'])
      @endif

      @if(Route::currentRouteName() == 'admin.faqs.trashed')
         @include('admin.actions.mass.restore', ['modelName'=>'faq'])
         @include('admin.actions.mass.delete', ['modelName'=>'faq'])
      @endif
      
   </div>
</div>
