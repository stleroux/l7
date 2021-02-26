@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/resetViews';
   } else {
      $routeName = 'admin/'.$modelName.'s/resetViews';
   }
@endphp

@can($modelName.'-manage')
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="{{ $model->id }}"
      data-url="{{ url($routeName, $model) }}"
      title="Reset {{ ucfirst($modelName) }} Views"
      >
      <i class="{{ config('icons.resetViews') }} text-secondary"></i>
      {{-- Reset Views --}}
   </button>
@endcan
