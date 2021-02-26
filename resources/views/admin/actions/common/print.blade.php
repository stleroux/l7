@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.print';
   } else {
      $routeName = 'admin.'.$modelName.'s.print';
   }
@endphp

<a href="{{ route($routeName, $model->id) }}"
   class="btn btn-block btn-default mt-2"
   title="Print {{ ucfirst($modelName) }}">
   <i class="{{ config('icons.print') }}"></i>
   <div class="d-none d-lg-inline">
      Print {{ ucfirst($modelName) }}
   </div>
</a>
