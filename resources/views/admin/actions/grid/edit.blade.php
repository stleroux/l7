@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.edit';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin.categories.edit';
   } else {
      $routeName = 'admin.'.$modelName.'s.edit';
   }
@endphp

@can($modelName.'-edit')
   <a href="{{ route($routeName, $model->id) }}"
      class="btn btn-sm btn-default"
      data-toggle="tooltip"
      title="Edit {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      {{-- Edit --}}
   </a>
@endcan
