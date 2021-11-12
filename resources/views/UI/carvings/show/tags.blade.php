<!-- TAGS -->
<div class="card card-trans-4 card-outline card-info text-dark mb-2">

   <div class="card-header bg-primary p-1">
      <div class="card-title">
         Related Tags
      </div>
   </div>

   @if($carving->tags->count() > 0)
      <div class="card-body p-1">
         @foreach($carving->tags as $tag)
            <span class="lead">
               <span class="badge badge-light font-weight-normal">
                  {{-- <a href="/carvings?tag={{ $tag->name }}">{{ $tag->name }}</a> --}}
                  {{-- <a href="{{ route('carvings.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a> --}}
                  {{ $tag->name }}
               </span>
            </span>
         @endforeach               
      </div>            
   @else
      <div class="card-body p-1">N/A</div>
   @endif

</div>
