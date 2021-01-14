<a href="{{ route('admin.faqs.index') }}"
   class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>

@if($previous)
   <a href="{{ route('admin.faqs.show', $previous) }}"
      class="btn btn-block btn-secondary"
      title="Previous Question">
      <i class="{{ config('icons.previous') }}"></i>
      Previous Question
   </a>
@endif

@if($next)
   <a href="{{ route('admin.faqs.show', $next) }}"
      class="btn btn-block btn-secondary"
      title="Next Question">
      Next Question
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      @can('faq-edit')
         <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-block btn-outline-primary">
            <i class="{{ config('icons.edit') }}"></i>
            Edit
         </a>
      @endcan

   </div>
</div>
