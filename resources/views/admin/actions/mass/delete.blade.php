@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.mass_delete';
   } else {
      $routeName = 'admin.'.$modelName.'s.mass_delete';
   }
@endphp

<form action="{{ route($routeName) }}" method="post">
   @csrf
   @method('DELETE')
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger mt-2"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="{{ config('icons.delete') }}"></i>
      Delete Selected
   </a>
</form>
