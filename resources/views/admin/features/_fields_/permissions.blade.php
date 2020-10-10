<!-- PERMISSIONS -->
<div class="card bg-danger">
   <div class="card-header">
      User will automatically receive all abilities on their own records.
      <br />
      Only select the permissions to allow non owners the abilities on ALL records.
   </div>
</div>


<div class="card card-info">

   <div class="card-header">
      <div class="card-title">Permissions</div>
   </div>

   <div class="card-body py-0">
      <div class="row my-2">
         <a href="#" type="button" class="btn btn-sm btn-primary check mr-1">
            <i class="{{ Config::get('icons.checked') }}"></i>
            Check All
         </a>
         <a href="#" class="btn btn-sm btn-primary uncheck">
            <i class="{{ Config::get('icons.unchecked') }}"></i>
            UnCheck All
         </a>
      </div>
         
      <div class="row mb-0">
             
         @foreach($permissions as $permission => $bulk)
                  
            <div class="card card-outline card-primary col-lg-3 col-md-4">
                      
               <div class="card-header">
                  <div class="card-title">{{ strtoupper($permission) }}</div>
               </div>
                      
               <div class="card-body">
                      
                  @foreach($bulk as $perm)
                               
                     <div class="icheck-primary d-inline">
                                    
                        <input name="permissions[]" type="checkbox" id="{{ $perm->id }}" value="{{ $perm->id }}" @if($role->permissions->pluck('id')->contains($perm->id)) checked @endif class="questionCheckBox">
                                    
                        <label for="{{ $perm->id }}" style="font-weight: normal">
                           {{ trim(ucfirst(explode('-', $perm->name)[1])) }}
                        </label>

                     </div>

                     <br />
                               
                  @endforeach
                      
               </div>
                  
            </div>
             
         @endforeach
         
      </div>
    
   </div>

</div>

@section('scripts')
   <script>
      $(function () {
         $('.check').on('click', function () {
            $('.questionCheckBox').each(function(){ this.checked = true; });
         });
      });

      $(function () {
         $('.uncheck').on('click', function () {
            $('.questionCheckBox').each(function(){ this.checked = false; });
         });
      });
   </script>
@endsection
