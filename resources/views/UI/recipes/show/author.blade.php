{{-- @if(checkACL('user')) --}}
   <div class="col-md-3">

      <div class="card card-trans-6 mb-2">

         <div class="card-header card_header p-1">
            <div class="card-title">
               Author               
            </div>
         </div>

         <div class="card-body card_body p-1 text-center">
            @include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])
         </div>
      </div>
   </div>
{{-- @endif --}}