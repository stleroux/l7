 @php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.removeAllPerms';
   } else {
      $routeName = 'admin.'.$modelName.'s.removeAllPerms';
   }
@endphp

 @can($modelName.'-manage')
   <a href="{{ route($routeName, $model) }}" class="btn btn-sm btn-default" title="Remove All Permissions">
      <i class="{{ config('icons.permissions') }} text-danger"></i>
   </a>
@endcan
