<!-- TAGS -->
<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         Related Tags
      </div>
   </div>

   @if($project->tags->count() > 0)
      <div class="card-body p-1">
         @foreach($project->tags as $tag)
            <span class="lead">
               <span class="badge badge-light font-weight-normal">
                  {{ $tag->name }}
               </span>
            </span>
         @endforeach               
      </div>            
   @else
      <div class="card-body p-1">N/A</div>
   @endif

</div>
