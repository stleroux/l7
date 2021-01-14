<div class="row p-0 pb-2">
   <div class="col-sm-3 pr-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Category</div>
         <div class="card-body p-1">{{ $carving->category }}</div>
      </div>
   </div>
   <div class="col-sm-3 px-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Shop Time</div>
         <div class="card-body p-1">
            @if($carving->time_invested)
               {{ $carving->time_invested }} Hours
            @else
               N/A
            @endif
         </div>
      </div>
   </div>
   <div class="col-sm-3 px-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Price</div>
         {{-- <div class="card-body p-1">{{ $carving->price ? '$ ' . $carving->price . '.00' : 'Please contact us for details' }}</div> --}}
         <div class="card-body p-1">
            @if($carving->price)
               {{ $carving->price . '.00' }}
            @else
               <a href="{{ route('contact') }}" class="text-info">Please contact us for details</a>
            @endif
         </div>
      </div>
   </div>
   <div class="col-sm-3 pl-1">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Views</div>
         <div class="card-body p-1">{{ $carving->views ?? "N/A" }}</div>
      </div>
   </div>
</div>

<div class="row p-0 pb-2">
   <div class="col-sm-12">
      <div class="card card-trans-4 text-dark">
         <div class="card-header bg-info p-1">Description</div>
         <div class="card-body p-1">{{ $carving->description }}</div>
      </div>
   </div>
</div>