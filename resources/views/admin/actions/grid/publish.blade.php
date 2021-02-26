@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/publish';
   } else {
      $routeName = 'admin/'.$modelName.'s/publish';
   }
@endphp

<button type="button"
	class="publish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#publishModal"
	data-id="{{ $model->id }}"
	data-url="{{ url($routeName, $model) }}"
	title="Publish {{ ucfirst($modelName) }}"
	>
	<i class="{{ config('icons.publish') }}"></i>
	{{-- Unpublish --}}
</button>
