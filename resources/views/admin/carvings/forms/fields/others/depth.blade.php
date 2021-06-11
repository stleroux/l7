<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="depth">Depth <small>(Inches)</small> (Z)</label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from front to back when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
      
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler"></i>
         </span>
      </div>

      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="col p-1 m-0 bg-gray-light border">
            {!! $carving->depth ?? 'N/A' !!}
         </div>

      @else
      
         <input type="text" name="depth" value="{{ old('depth') ?? $carving->depth }}" class="form-control form-control-sm">

      @endif
   
   </div>
   
</div>
