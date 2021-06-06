{{-- <div class="row p-0 pb-2">
   <div class="col-sm-6 pr-1"> --}}
      <div class="card card-primary">
         <div class="card-header p-2">
            {{-- <div class="card-title"> --}}
               Finish(es) Used In This Carving
            {{-- </div> --}}
         </div>
         @if($carving->finishes->count() > 0)
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th class="m-0 p-2">Name</th>
                     <th class="m-0 p-2">Type</th>
                     <th class="m-0 p-2">Color</th>
                     <th class="m-0 p-2">Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($carving->finishes as $f)
                     <tr>
                        <td class="m-0 p-2">{{ $f->name }}</td>
                        <td class="m-0 p-2">{{ $f->type }}</td>
                        <td class="m-0 p-2">{{ $f->color_name }}</td>
                        <td class="m-0 p-2">{{ $f->manufacturer }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <div class="card-body m-2 p-0">N/A</div>
         @endif
      </div>
   {{-- </div>
</div> --}}
