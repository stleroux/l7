{{-- @if(checkACL('user')) --}}
   <div class="col-md-3">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Publish(ed) On</div>
         <div class="card-body p-1 text-center">
            @if ($recipe->published_at)
               {{ $recipe->published_at->diffForHumans() }}
            @else
               N/A
            @endif
         </div>
      </div>
   </div>
{{-- @endif --}}