@php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.mass_unpublish';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin.categories.mass_unpublish';
   } else {
      $routeName = 'admin.'.$modelName.'s.mass_unpublish';
   }
@endphp

<form action="{{ route('admin.posts.mass_unpublish') }}" method="post" class="">
   @csrf
   <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-warning mt-2"
      id="btn_multiunpublish"
      style="display:none"
      data-target="#massUnpublish-modal">
      <i class="{{ config('icons.unpublish') }}"></i>
      Unpublish Selected
   </a>
</form>
