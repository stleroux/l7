<div class="col-md-12">

   <div class="card card-trans-6 mb-2">

      <div class="card-header card_header p-1">
         <div class="card-title">
            Author's Notes               
         </div>
      </div>

      <div class="card-body card_body p-1 text-dark">
         @if ($recipe->public_notes) 
            {!! $recipe->public_notes !!}
         @else
            N/A
         @endif
      </div>

   </div>

</div>
