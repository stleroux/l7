<div class="card mb-2">

   <div class="card-header bg-primary p-2">
      {{-- <i class="{{ config('icons.tags') }}"></i> --}}
      Tags
   </div>
   
   <div class="card-body card-trans-6 p-1 m-0">
      <a href="{{ route('admin.carvings.index') }}"
         class="btn btn-xs btn-block btn-{{ !request('tag') ? 'dark' : 'secondary' }}">
         All Carvings
      </a>

      @foreach($tags as $t)
         <a href="{{ route('admin.carvings.index', ['tag'=>$t->name]) }}"
            class="btn btn-xs btn-{{ (request('tag') == $t->name) ? 'dark' : 'secondary' }} mt-1">
            {{ ucwords($t->name) }}
         </a>
      @endforeach
   
   </div>

</div>
