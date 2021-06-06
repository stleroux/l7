@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.edit';
   } else {
      $routeName = 'admin.'.$modelName.'s.edit';
   }
@endphp

@can($modelName.'-edit')
   <a href="{{ route($routeName, $model->id) }}" class="btn btn-block btn-outline-primary"
      title="Edit {{ $modelName }}">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
