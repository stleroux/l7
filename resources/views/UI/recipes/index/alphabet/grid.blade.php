<div class="text-center">
   <div class="btn-group" role="group">
      @if(Request::route('cat') == 'all')
         <a href="{{ route('recipes.indexGrid', 'all') }}"
            class="{{ Request::is('recipes/indexGrid/all') ? "btn-secondary": "btn-primary" }} btn btn-sm">
            All
         </a>
         @foreach($letters as $value)
            <a href="{{ route('recipes.indexGrid', ['all', $value]) }}"
               class="{{ Request::is('recipes/indexGrid/all/' . $value) ? "btn-secondary": "btn-primary" }} btn btn-sm">
               {{ strtoupper($value) }}
            </a>
         @endforeach
      @else
         <a href="{{ route('recipes.indexGrid', Request::route('cat')) }}"
            class="{{ Request::is('recipes/indexGrid/' . Request::route('cat'), Request::route('key')) ? "btn-secondary": "btn-primary" }} btn btn-sm">
            All
         </a>
         @foreach($letters as $value)
            <a href="{{ route('recipes.indexGrid', [Request::route('cat'), $value]) }}"
               class="{{ Request::is('recipes/indexGrid/' . Request::route('cat') . '/' . $value) ? "btn-secondary": "btn-primary" }} btn btn-sm">
               {{ strtoupper($value) }}
            </a>
         @endforeach
      @endif
   </div>
</div>
