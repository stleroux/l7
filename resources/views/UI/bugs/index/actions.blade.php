{{-- @if(!$bug->status == 'Resolved') --}}
   
   <div class="dropdown text-center">

      <a class="dropdown-button"
         id="dropdown-menu-{{ $bug->id }}"
         data-toggle="dropdown"
         data-boundary="viewport"
         aria-haspopup="true"
         aria-expanded="false">
         <i class="{{ Config::get('icons.ellipsis') }}"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $bug->id }}">

         {{-- @if(!$bug->status == 'New' || !$bug->status == 'Resolved') --}}
            <a href="{{ route('bugs.edit', $bug) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>
         {{-- @endif --}}
         
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $bug->id }}"
               data-url="{{ url('bugs', $bug->id) }}">
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </a>

      </div>

   </div>

{{-- @endif --}}
