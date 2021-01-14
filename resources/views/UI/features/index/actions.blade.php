{{-- @if($feature->status == 'New')
   
   <div class="dropdown text-center">

      <a class="dropdown-button"
         id="dropdown-menu-{{ $feature->id }}"
         data-toggle="dropdown"
         data-boundary="viewport"
         aria-haspopup="true"
         aria-expanded="false">
         <i class="{{ config('icons.ellipsis') }}"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $feature->id }}">


            <a href="{{ route('features.edit', $feature) }}" class="dropdown-item bg-light">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               Edit
            </a>
         
            <a href="#"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $feature->id }}"
               data-url="{{ url('features', $feature->id) }}">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               Trash
            </a>


      </div>

   </div>

@else

   No Options Available               

@endif --}}

<a href="{{ route('features.show', $feature) }}" class="btn btn-sm btn-default">
               <i class="{{ config('icons.view') }} text-primary"></i>
               View
            </a>
            
@if($feature->status == 'New')
   
            <a href="{{ route('features.edit', $feature) }}" class="btn btn-sm btn-default">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               Edit
            </a>
         
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $feature->id }}"
               data-url="{{ url('features', $feature->id) }}">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               Trash
            </a>

           

@endif