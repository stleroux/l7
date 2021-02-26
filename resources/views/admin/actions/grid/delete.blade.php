<!-- CANNOT use a link here, must use a button -->
@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/delete';
   } else {
      $routeName = 'admin/'.$modelName.'s/delete';
   }
@endphp

<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="{{ $model->id }}"
   data-url="{{ url($routeName, $model->id) }}"
   title="Delete {{ ucfirst($modelName) }} Permanently">
   <i class="{{ config('icons.delete') }} text-danger"></i>
</button>
