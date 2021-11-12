@php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/unpublish';
   } else {
      $routeName = 'admin/'.$modelName.'s/unpublish';
   }
@endphp

<span data-toggle="modal" data-target="#unpublishModal">
	<button type="button"
		class="unpublish-model btn btn-sm btn-default"
		data-toggle="tooltip"
		{{-- data-target="#unpublishModal" --}}
		data-id="{{ $model->id }}"
		{{-- data-url="{{ url('admin/posts/unpublish', $model) }}" --}}
		data-url="{{ url($routeName, $model) }}"
		title="Unpublish {{ ucfirst($modelName) }}"
		>
		<i class="{{ config('icons.publish') }} text-warning"></i>
		{{-- Unpublish --}}
	</button>
</span>
