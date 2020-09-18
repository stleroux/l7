<div class="text-center">
   <div class="btn-group" role="group">
      @if(Request::route('cat') == 'all')
         <a href="{{ route('recipes.myRecipesGrid', 'all') }}"
            class="{{ Request::is('recipes/myRecipesGrid/all') ? "btn-default": "btn-maroon" }} btn btn-sm">
            All
         </a>
         @foreach($letters as $value)
            <a href="{{ route('recipes.myRecipesGrid', ['all', $value]) }}"
               class="{{ Request::is('recipes/myRecipesGrid/all/' . $value) ? "btn-default": "btn-maroon" }} btn btn-sm">
               {{ strtoupper($value) }}
            </a>
         @endforeach
      @else
         <a href="{{ route('recipes.myRecipesGrid', Request::route('cat')) }}"
            class="{{ Request::is('recipes/myRecipesGrid/' . Request::route('cat'), Request::route('key')) ? "btn-default": "btn-maroon" }} btn btn-sm">
            All
         </a>
         @foreach($letters as $value)
            <a href="{{ route('recipes.myRecipesGrid', [Request::route('cat'), $value]) }}"
               class="{{ Request::is('recipes/myRecipesGrid/' . Request::route('cat') . '/' . $value) ? "btn-default": "btn-maroon" }} btn btn-sm">
               {{ strtoupper($value) }}
            </a>
         @endforeach
      @endif
   </div>
</div>
