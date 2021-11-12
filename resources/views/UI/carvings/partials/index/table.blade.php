{{-- <table border="1" cellpadding="1" cellspacing="1" width="100%"> --}}
<table class="table table-sm">
   <thead>
      <tr>
         <th width="50%">Category</th>
         <th width="50%">Images</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>{{ $carving->category }}</td>
         <td>{{ count($carving->images) }}</td>
      </tr>
   </tbody>
   <thead>
      <tr>
         <th>Comments</th>
         <th>Views</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>{{ $carving->comments->count() }}</td>
         <td>{{ views($carving)->count() }}</td>
      </tr>
   </tbody>
   <thead>
      <tr>
         <th>Likes</th>
         <th>Suggested Price</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>{{ $carving->likes()->count() }}</td>
         <td>${{ number_format($carving->price,2) }}</td>
      </tr>
   </tbody>
</table>
