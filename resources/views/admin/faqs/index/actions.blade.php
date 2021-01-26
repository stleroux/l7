@if(!$faq->deleted_at)
   @include('admin.faqs.actions.grid.edit')
   {{-- @include('admin.faqs.actions.grid.resetViews') --}}
   @include('admin.faqs.actions.grid.destroy')
@endif

@if($faq->deleted_at)
   @include('admin.faqs.actions.grid.restore')
   @include('admin.faqs.actions.grid.delete')
@endif
