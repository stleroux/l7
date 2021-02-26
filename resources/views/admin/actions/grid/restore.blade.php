@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/restore';
   } else {
      $routeName = 'admin/'.$modelName.'s/restore';
   }
@endphp

<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="{{ $model->id }}"
   data-url="{{ url($routeName, $model) }}"
   title="Restore {{ ucfirst($modelName) }}"
   >
   <i class="{{ config('icons.restore') }} text-primary"></i>
</button>
