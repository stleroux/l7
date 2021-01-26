{{-- @if(checkACL('user')) --}}
   <div class="col-md-12">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Author's Notes</div>
         <div class="card-body p-1 text-dark">
            @if ($recipe->public_notes) 
               {!! $recipe->public_notes !!}
            @else
               N/A
            @endif
         </div>
      </div>
   </div>
{{-- @endif --}}