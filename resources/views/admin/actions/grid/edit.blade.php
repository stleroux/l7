@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.edit';
   } else {
      $routeName = 'admin.'.$modelName.'s.edit';
   }
@endphp

@can($modelName.'-edit')
   <a href="{{ route($routeName, $model->id) }}" class="btn btn-sm btn-default" title="Edit {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
