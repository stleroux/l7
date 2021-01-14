<div class="card mb-2 card-trans-4 bg-primary">
   
   <div class="card-header p-2">
      <i class="{{ config('icons.tags') }}"></i>
      Tags
   </div>
   
   <div class="card-body card-trans-6 p-1 m-0">

      <a href="{{ route('carvings.index') }}"
         class="btn btn-xs btn-block btn-{{ !request('tag') ? 'dark' : 'secondary' }} mt-1">
         All Carvings
      </a>

      @foreach($tags as $t)

         @if(request('filter'))
            <a href="{{ route('carvings.index', ['filter'=>request('filter'), 'tag'=>$t->name]) }}"
               class="btn btn-xs btn-{{ request()->is('carvings/*/'.$t->name) ? 'dark' : 'secondary' }} mt-1">
               {{ $t->name }}
            </a>
         @else
            <a href="{{ route('carvings.index', ['filter'=>'all', 'tag'=>$t->name]) }}"
               class="btn btn-xs btn-{{ request()->is('carvings/*/'.$t->name) ? 'dark' : 'secondary' }} mt-1">
               {{ $t->name }}
            </a>
         @endif

      @endforeach      
   
   </div>

</div>
