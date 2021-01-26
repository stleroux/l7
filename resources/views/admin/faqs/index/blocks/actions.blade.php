<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      {{-- @if(Route::currentRouteName() == 'admin.carvings.index') --}}
      @include('admin.faqs.actions.common.create')
      {{-- @endif --}}

      @if(Route::currentRouteName() == 'admin.faqs.index')
         {{-- @include('admin.faqs.actions.mass.resetViews') --}}
         @include('admin.faqs.actions.mass.destroy')
      @endif

      @if(Route::currentRouteName() == 'admin.faqs.trashed')
         @include('admin.faqs.actions.mass.restore')
         @include('admin.faqs.actions.mass.delete')
      @endif
      
   </div>
</div>
