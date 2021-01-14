<div class="card-header d-none d-xl-block pt-0 pb-2 text-center">
   <div class="btn-group" role="group">
   @foreach($carving->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
      @if($categoryOptionKey == 'select')
         <a href="{{ route('carvings.index') }}"
            class="btn btn-sm btn-{{ (request()->is('carvings/all/*') || request()->is('carvings')) ? 'dark' : 'alphabet' }}">
            All Carvings
         </a>
      @else
         <a href="{{ route('carvings.index', $categoryOptionKey) }}"
            class="btn btn-sm btn-{{ request()->is('carvings/'.$categoryOptionKey.'*') ? 'dark' : 'alphabet' }} p-1">
            {{ $categoryOptionValue }}
            {{-- {{ $categoryOptionKey }} --}}
         </a>
      @endif
   @endforeach
   </div>
</div>

{{-- Used on small screens only --}}
<div class="card-header d-block d-xl-none pt-0 pb-3 text-center">
   <select name="filter" class="form-control" onchange="if (this.value) window.location.href=this.value">
      @foreach($carving->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
         <option value="{{ route('carvings.index', $categoryOptionKey) }}" {{ Request()->filter == $categoryOptionKey ? ' selected' : '' }}>
            @if($categoryOptionValue == 'Select One')
               All Carvings
            @else
               {{ $categoryOptionValue }}
            @endif
         </option>
      @endforeach
   </select>
</div>
