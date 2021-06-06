@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/restore';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin/categories/restore';
   } else {
      $routeName = 'admin/'.$modelName.'s/restore';
   }
@endphp

<span data-toggle="modal" data-target="#restoreModal">
   <button type="button"
      class="restore-model btn btn-sm btn-default"
      data-toggle="tooltip"
      {{-- data-target="#restoreModal" --}}
      data-id="{{ $model->id }}"
      data-url="{{ url($routeName, $model) }}"
      title="Restore {{ ucfirst($modelName) }}"
      >
      <i class="{{ config('icons.restore') }} text-primary"></i>
   </button>
</span>
