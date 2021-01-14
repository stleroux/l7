<div class="row p-0 pb-2">
   <div class="col-sm-2 pr-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Width <small>(inches)</small></div>
         <div class="card-body p-1">{{ $carvings->width ?? "N/A" }}</div>
      </div>
   </div>
   <div class="col-sm-2 px-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Depth <small>(inches)</small></div>
         <div class="card-body p-1">{{ $carvings->depth ?? "N/A" }}</div>
      </div>
   </div>
   <div class="col-sm-2 px-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Height <small>(inches)</small></div>
         <div class="card-body p-1">{{ $carvings->height ?? "N/A" }}</div>
      </div>
   </div>
   <div class="col-sm-2 px-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Weight <small>(pounds)</small></div>
         <div class="card-body p-1">{{ $carvings->weight ?? "N/A" }}</div>
      </div>
   </div>
   <div class="col-sm-2 pl-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Completion Date</div>
         <div class="card-body p-1">{{ ($carvings->completed_at ? $carvings->completed_at->format('M d, Y') : "In Progress") }}</div>
      </div>
   </div>
</div>

