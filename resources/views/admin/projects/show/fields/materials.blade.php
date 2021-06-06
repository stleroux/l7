{{-- <div class="row p-0 pb-2">
   <div class="col pr-1"> --}}
      <div class="card card-primary">
         <div class="card-header p-2">
            {{-- <div class="card-title"> --}}
            Material(s) Used In This Project
            {{-- </div> --}}
         </div>
         @if($project->materials->count() > 0)
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Type</th>
                     <th>Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($project->materials as $m)
                     <tr>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->type ?? "N/A" }}</td>
                        <td>{{ $m->manufacturer ?? "N/A" }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <div class="card-body p-2">N/A</div>
         @endif
      </div>
   {{-- </div>
</div> --}}
