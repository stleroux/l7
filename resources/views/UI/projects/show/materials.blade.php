<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         <i class="{{ config('icons.materials') }}"></i>
         Material(s) Used In This Project
      </div>
   </div>

   @if($project->materials->count() > 0)
      <table class="table table-sm table-hover table-striped mb-0">
         <thead>
            <tr class="text-dark">
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
      <div class="card-body p-1">N/A</div>
   @endif

</div>
