@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.index';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin.categories.index';
   } else {
      $routeName = 'admin.'.$modelName.'s.index';
   }
@endphp

<a
	href="{{ route($routeName) }}"
	class="btn btn-block btn-default"
	title="Back"
>
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>
