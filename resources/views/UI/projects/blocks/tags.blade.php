<div class="card mb-2 card-trans-4 bg-info">
   
   <div class="card-header p-2">
      <i class="{{ config('icons.tags') }}"></i>
      Tags
   </div>
   
   <div class="card-body card-trans-6 p-1 m-0">

      <a href="{{ route('projects.index') }}"
         class="btn btn-xs btn-block btn-{{ !request('tag') ? 'dark' : 'secondary' }} mt-1">
         All Tags
      </a>

      @foreach($tags as $t)

         @if(request('filter'))
            <a href="{{ route('projects.index', ['filter'=>request('filter'), 'tag'=>$t->name]) }}"
               class="btn btn-xs btn-{{ request()->is('projects/*/'.$t->name) ? 'dark' : 'secondary' }} mt-1">
               {{ $t->name }}
            </a>
         @else
            <a href="{{ route('projects.index', ['filter'=>'all', 'tag'=>$t->name]) }}"
               class="btn btn-xs btn-{{ request()->is('projects/*/'.$t->name) ? 'dark' : 'secondary' }} mt-1">
               {{ $t->name }}
            </a>
         @endif

      @endforeach      
   
   </div>

</div>
