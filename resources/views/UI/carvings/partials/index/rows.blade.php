<div class="col text-center">
   <div class="row">
      <div class="w-50 font-weight-bold">Category</div>   
      <div class="w-50 font-weight-bold">Views</div>
   </div>
</div>

<div class="col text-center">
   <div class="row border-bottom border-dark">
      <div class="w-50 border-right border-dark">{{ $carving->category }}</div>
      <div class="w-50">{{ views($carving)->count() }}</div>
   </div>
</div>

<div class="col text-center">
   <div class="row">
      <div class="w-50 font-weight-bold">Comments</div>
      <div class="w-50 font-weight-bold">Images</div>
   </div>
</div>

<div class="col text-center">
   <div class="row border-bottom border-dark">
      <div class="w-50 border-right border-dark">{{ count($carving->images) }}</div>
      <div class="w-50">{{ $carving->comments->count() }}</div>
   </div>
</div>

<div class="col text-center">
   <div class="row">
       <div class="w-50 font-weight-bold">Likes</div>
       <div class="w-50 font-weight-bold">
         {{-- MSRP --}}
      </div>
   </div>
</div>

<div class="col text-center">
   <div class="row {{-- border-bottom border-dark --}}">
      <div class="w-50 border-right border-bottom border-dark">{{ $carving->likes()->count() }}</div>
      <div class="w-50">
         {{-- ${{ number_format($carving->price,2) }} --}}
      </div>
   </div>
</div>
