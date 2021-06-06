<!-- TAGS -->

<div class="card card-primary">
   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Tags
      {{-- </div> --}}
   </div>
   @if($project->tags->count() > 0)
      <div class="card-body">
         @foreach($project->tags as $t)
            <span class="lead">
               <span class="badge badge-secondary">
                  {{ ucwords($t->name) }}                     
               </span>
            </span>
         @endforeach               
      </div>            
   @else
      <div class="card-body p-2">N/A</div>
   @endif
</div>
