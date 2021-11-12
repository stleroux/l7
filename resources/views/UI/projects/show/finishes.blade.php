<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         <i class="{{ config('icons.finishes') }}"></i>
         Finish(es) Used In This Project
      </div>
   </div>
   
   @if($project->finishes->count() > 0)
      <table class="table table-sm table-hover table-striped mb-0">
         <thead>
            <tr class="text-dark">
               <th>Name</th>
               <th>Type</th>
               <th>Color</th>
               <th>Sheen</th>
            </tr>
         </thead>
         <tbody>
            @foreach($project->finishes as $f)
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
      <div class="card-body p-1">N/A</div>
   @endif
   
</div>
