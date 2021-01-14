<div class="card card-trans-4 card-outline card-info mb-2">

   <div class="card-header bg-primary">
      <div class="card-title font-weight-bold">
         <i class="{{ config('icons.materials') }}"></i>
         Material(s) Used In This Carving
      </div>
   </div>

   @if($carving->materials->count() > 0)
      <table class="table table-hover table-striped mb-0">
         <thead>
            <tr class="text-dark">
               <th>Name</th>
               <th>Type</th>
               <th>Manufacturer</th>
            </tr>
         </thead>
         <tbody>
            @foreach($carving->materials as $m)
               <tr>
                  <td>{{ $m->name }}</td>
                  <td>{{ $m->type ?? "N/A" }}</td>
                  <td>{{ $m->manufacturer ?? "N/A" }}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   @else
      <div class="card-body">N/A</div>
   @endif

</div>
