
<div class="card mb-2 card-trans-4" style="background-color: #800000">
   
   <div class="card-header text-light p-2">
      <i class="{{ Config::get('icons.recipes') }}"></i>
      Popular Recipes
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">
      
      @if($popular->count() > 0)
         <ul class="list-group">
            
            @foreach ($popular as $r)

               <a href="{{ route('recipes.show', $r->id) }}" 
                  class="card-trans-2 list-group-item list-group-item-action p-1 {{ (route('recipes.show', $r->id) === url()->current()) ? 'recipeActive' : '' }}">
               
                  <div class="text text-left">
               
                     <i class="{{ Config::get('icons.recipes') }}"></i>
                     {{ $r->title }}
               
                     <span class="badge badge-maroon float-right">{{ $r->views }}</span>
                  
                  </div>

               </a>

            @endforeach

         </ul>
      @else
         {{ Config::get('settings.noRecordsFound') }}
      @endif
   </div>

</div>
