@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes';
   } else {
      $routeName = 'admin/'.$modelName.'s';
   }
@endphp

@can($modelName.'-delete')
   <span data-toggle="modal" data-target="#destroyModal">
      <a href="#"
         class="destroy-model btn btn-sm btn-default"
         data-toggle="tooltip"
         {{-- data-target="#destroyModal" --}}
         data-id="{{ $model->id }}"
         data-url="{{ url($routeName, $model->id) }}"
         title="Trash {{ ucfirst($modelName) }}">
         <i class="{{ config('icons.trash') }} text-pink"></i>
         {{-- Trash --}}
      </a>
   </span>
@endcan
