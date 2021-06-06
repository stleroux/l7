@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.addAllPerms';
   } else {
      $routeName = 'admin.'.$modelName.'s.addAllPerms';
   }
@endphp

@can($modelName.'-manage')
   	<a href="{{ route($routeName, $model) }}"
		class="btn btn-sm btn-default"
   		title="Add All Permissions"
   		data-toggle="tooltip">
      <i class="{{ config('icons.permissions') }} text-primary"></i>
   </a>
@endcan
