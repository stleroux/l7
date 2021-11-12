<!-- TAGS -->

<div class="card card-primary">
   <div class="card-header">
      <div class="card-title">Tags</div>
   </div>
   @if($carving->tags->count() > 0)
      <div class="card-body">
         @foreach($carving->tags as $t)
            <span class="lead">
               <span class="badge badge-secondary">
                  {{ $t->name }}                     
               </span>
            </span>
         @endforeach               
      </div>            
   @else
      <div class="card-body">N/A</div>
   @endif
</div>
