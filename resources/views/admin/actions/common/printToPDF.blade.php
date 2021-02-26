@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.printPDF';
   } else {
      $routeName = 'admin.'.$modelName.'s.printPDF';
   }
@endphp

<a href="{{ route($routeName, $model->id) }}"
   class="btn btn-block btn-default"
   title="Print {{ ucfirst($modelName) }} to PDF">
   <i class="{{ config('icons.pdf') }}"></i>
   <div class="d-none d-lg-inline">
      Print to PDF
   </div>
</a>
