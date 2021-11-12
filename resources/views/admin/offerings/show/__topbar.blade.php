<div class="row-col mb-2">

   <a href="{{ route('admin.faqs.index') }}"
      class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      Back
   </a>

   @can('faq-edit')
      <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-primary">
         <i class="{{ config('icons.edit') }}"></i>
         Edit
      </a>
   @endcan

   <div class="float-right">

      @if($previous)
         <a href="{{ route('admin.faqs.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Question">
            <i class="{{ config('icons.previous') }}"></i>
            Previous Question
         </a>
      @endif

      @if($next)
         <a href="{{ route('admin.faqs.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Question">
            Next Question
            <i class="{{ config('icons.next') }}"></i>
         </a>
      @endif

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="{{ config('icons.help') }}"></i>
         Help
      </a>

   </div>
   
</div>
