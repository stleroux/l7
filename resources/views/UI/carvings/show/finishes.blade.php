{{-- <div class="row p-0 pb-2">
   <div class="col-sm-6 pr-1"> --}}
      <div class="card card-trans-4 card-outline card-info">
         <div class="card-header bg-primary">
            <div class="card-title font-weight-bold">
               <i class="{{ config('icons.finishes') }}"></i>
               Finish(es) Used In This Carving
            </div>
         </div>
         @if($carving->finishes->count() > 0)
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr class="text-dark">
                     <th>Name</th>
                     <th>Type</th>
                     <th>Color</th>
                     <th>Sheen</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($carving->finishes as $f)
                     <tr>
                        <td>{{ $f->name }}</td>
                        <td>{{ $f->type }}</td>
                        <td>{{ $f->color_name }}</td>
                        <td>{{ $f->sheen }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <div class="card-body">N/A</div>
         @endif
      </div>
   {{-- </div>
</div> --}}
