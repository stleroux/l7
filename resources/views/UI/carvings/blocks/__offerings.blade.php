{{-- @auth --}}
   {{-- @if(Auth::user()->hasAnyRoles(['admin','customOrdering'])) --}}
      <div class="card mb-2 card-trans-4 bg-primary">
         
         <div class="card-header p-2">
            <i class="{{ Config::get('icons.carvings') }}"></i>
            Types of Carvings Offered
         </div>
         
         <div class="card-body card-trans-6 p-0 m-0">

            <a href="{{ route('offerings.index') }}" class="card-trans-2 list-group-item list-group-item-action p-1">
               Types of Carvings Offered
            </a>

         </div>

      </div>
   {{-- @endif --}}
{{-- @endauth --}}
