@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.mass_publish';
   } else {
      $routeName = 'admin.'.$modelName.'s.mass_publish';
   }
@endphp

<form action="" method="POST" class="">
   @csrf
   <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-block btn-outline-warning mt-2"
      id="btn_multipublish"
      style="display:none"
      data-target="#massPublish-modal">
      <i class="{{ config('icons.publish') }}"></i>
      Publish Selected
   </a>
</form>
