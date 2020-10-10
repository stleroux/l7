{{-- @if(!$feature->status == 'Resolved') --}}
   
   <div class="dropdown text-center">

      <a class="dropdown-button"
         id="dropdown-menu-{{ $feature->id }}"
         data-toggle="dropdown"
         data-boundary="viewport"
         aria-haspopup="true"
         aria-expanded="false">
         <i class="{{ Config::get('icons.ellipsis') }}"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $feature->id }}">

         {{-- @if(!$feature->status == 'New' || !$feature->status == 'Resolved') --}}
            <a href="{{ route('features.edit', $feature) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         {{-- @endif --}}
         
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $feature->id }}"
               data-url="{{ url('features', $feature->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </a>

      </div>

   </div>

{{-- @endif --}}
