<div class="row">
   <div class="col text-right pr-0">
      <strong>Category :</strong>
   </div>
   <div class="col text-left pl-1">
      {{ $carving->category }}
   </div>
</div>
<div class="row">
   <div class="col text-right pr-0">
      <strong>Views :</strong>
   </div>
   <div class="col text-left pl-1">
      {{ views($carving)->count() }}
   </div>
</div>
<div class="row">
   <div class="col text-right pr-0">
      <strong>Comments :</strong>
   </div>
   <div class="col text-left pl-1">
      {{ $carving->comments->count() }}
   </div>
</div>
<div class="row">
   <div class="col text-right pr-0">
      <strong>Images :</strong>
   </div>
   <div class="col text-left pl-1">
       {{ count($carving->images) }}
   </div>
</div>
<div class="row">
   <div class="col text-right pr-0">
      <strong>Likes :</strong>
   </div>
   <div class="col text-left pl-1">
      {{ $carving->likes()->count() }}
   </div>
</div>
<div class="row">
   <div class="col text-right pr-0">
      <strong>Suggested Price :</strong>
   </div>
   <div class="col text-left pl-1">
      ${{ number_format($carving->price,2) }}
   </div>
</div>
