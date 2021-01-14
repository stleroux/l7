<div class="card mb-2 card-trans-4 bg-primary">
   
   <div class="card-header p-2">
      <i class="{{ config('icons.carvings') }}"></i>
      Popular Carvings
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">

      @if($popular->count() > 0)
      
         <ul class="list-group">

            @foreach ($popular as $p)

               <a href="{{ route('carvings.show', $p->id) }}" class="card-trans-2 list-group-item list-group-item-action p-1 {{ (route('carvings.show', $p->id) === url()->current()) ? 'carvingActive' : '' }}">

                  <div class="text text-left">
                     <i class="{{ config('icons.carvings') }}"></i>
                     {{ ucwords($p->name) }}

                     <span class="badge badge-info float-right">{{ $p->views }}</span>

                  </div>

               </a>

            @endforeach

         </ul>
      
      @else
      
         <div class="col-row p-2 card-trans-4 text-dark">
            {{ config('settings.noRecordsFound') }}
         </div>
      
      @endif
   
   </div>

</div>
