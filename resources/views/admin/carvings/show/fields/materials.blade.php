{{-- <div class="row p-0 pb-2">
   <div class="col pr-1"> --}}
      <div class="card card-primary">
         <div class="card-header p-2">
            {{-- <div class="card-title"> --}}
               Material(s) Used In This Carving
            {{-- </div> --}}
         </div>
         @if($carving->materials->count() > 0)
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th class="m-2 p-0">Name</th>
                     <th class="m-2 p-0">Type</th>
                     <th class="m-2 p-0">Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($carving->materials as $m)
                     <tr>
                        <td class="m-2 p-0">{{ $m->name }}</td>
                        <td class="m-2 p-0">{{ $m->type ?? "N/A" }}</td>
                        <td class="m-2 p-0">{{ $m->manufacturer ?? "N/A" }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <div class="card-body m-0 p-2">N/A</div>
         @endif
      </div>
   {{-- </div>
</div> --}}
