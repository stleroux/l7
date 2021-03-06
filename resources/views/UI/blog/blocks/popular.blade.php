<div class="card mb-2 card-trans-4">

   <div class="card-header bg-steel p-2">
      <i class="fas fa-fw fa-blog"></i>
      Popular Blog Posts
   </div>
   
   <div class="card-body bg-steel-light p-2">
      @if($popular->count() > 0)
         <ul class="list-group px-0 py-0">
            @foreach ($popular as $p)
               <a class="list-group-item list-group-item-action p-1 card-trans-4" href="{{ route('blog.show', $p->slug) }}" role="button" style="text-decoration: none">
                  <div class="text text-left">
                     <i class="fas fa-fw fa-blog"></i>
                     {{ $p->title }}
                     <span class="badge badge-danger float-right">{{ $p->views }}</span>
                  </div>
               </a>
            @endforeach
         </ul>
       @else
         {{ config('settings.noRecordsFound') }}
      @endif
   </div>

</div>
