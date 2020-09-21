<div class="card mb-2 card-trans-4 bg-info">
   
   <div class="card-header p-2">
      <i class="{{ Config::get('icons.projects') }}"></i>
      Popular Projects
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">
      @if($popular->count() > 0)
         <ul class="list-group">
            @foreach ($popular as $p)
               <a class="card-trans-2 list-group-item list-group-item-action p-1" href="{{ route('projects.show', $p->id) }}" role="button" style="text-decoration: none">
                  <div class="text text-left">
                     <i class="{{ Config::get('icons.projects') }}"></i>
                     {{ ucwords($p->name) }}
                     <span class="badge badge-info float-right">{{ $p->views }}</span>
                  </div>
               </a>
            @endforeach
         </ul>
      @else
         {{ Config::get('settings.noRecordsFound') }}
      @endif
   </div>

</div>
