{{-- <a href="{{ route('admin.users.disable', $user) }}" class="btn btn-block btn-outline-pink">
   <i class="{{ config('icons.disable') }}"></i>
   Disable Account
</a>
 --}}

 @php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.disable';
   } else {
      $routeName = 'admin.'.$modelName.'s.disable';
   }
@endphp

@can($modelName.'-manage')
   <a href="{{ route($routeName, $model->id) }}" class="btn btn-sm btn-default" title="Disable {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.disable') }} text-pink"></i>
   </a>
@endcan