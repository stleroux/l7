{{-- @if(checkACL('user')) --}}
   <div class="col-md-3">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Author</div>
         <div class="card-body p-1 text-center">
            @include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])
         </div>
      </div>
   </div>
{{-- @endif --}}