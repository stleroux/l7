{{-- <a href="{{ route('admin.users.approve', $user) }}" class="btn btn-block btn-outline-primary">
   <i class="{{ config('icons.approve') }}"></i>
   Enable Account
</a>
 --}}
@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.enable';
   } else {
      $routeName = 'admin.'.$modelName.'s.enable';
   }
@endphp

@can($modelName.'-manage')
   <a href="{{ route($routeName, $model->id) }}"
      class="btn btn-sm btn-default"
      data-toggle="tooltip"
      title="Enable {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.enable') }} text-primary"></i>
   </a>
@endcan