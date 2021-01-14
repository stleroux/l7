<div class="col-xs-12 col-sm-6 col-md-3">
   
   <label for="width">Width <small>(Inches)</small></label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Dimensions from left to right when facing the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
   
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-ruler-horizontal"></i>
         </span>
      </div>
   
      <input type="number" name="width" value="{{ old('width') ?? $project->width }}" class="form-control form-control-sm">
   
   </div>
   
</div>
