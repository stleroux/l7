<div class="row">

   <div class="col mb-2 text-center">
   </div>

   @if($feature->status != "Rejected" && $feature->status != "Implemented")
      <div class="col mb-2 float-right px-1">
         @include('common.likeTopbar', ['model' => $feature])
      </div>
   @endif

   <div class="d-flex mb-2">

      <div class="float-right">

         <a href="{{ route('features.index') }}"
            class="btn btn-sm btn-light border">
            <i class="{{ config('icons.back') }}"></i>
            <div class="d-none d-lg-inline">
               Cancel
            </div>
         </a>

         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ config('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>

      </div>

   </div>

</div>
