@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.index';
   } else {
      $routeName = 'admin.'.$modelName.'s.index';
   }
@endphp

<a href="{{ route($routeName) }}" class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>
