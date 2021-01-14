<div class="col-xs-12 col-sm-6 col-md-3">
   
   <label for="height">Height <small>(Inches)</small></label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from the floor up when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
      
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler-vertical"></i>
         </span>
      </div>
      
      <input type="number" name="height" value="{{ old('height') ?? $carving->height }}" class="form-control form-control-sm">
   
   </div>
   
</div>
