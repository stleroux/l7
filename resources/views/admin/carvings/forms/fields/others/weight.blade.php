<div class="col-xs-12 col-sm-6 col-md-3">
   
   <label for="weight">Weight <small>(In Lbs)</small></label>
   
   <span class="float-right">
      <i class="fa fa-question-circle" title="Total weight of the item"></i>
   </span>
   
   <div class="input-group input-group-sm">
   
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-balance-scale"></i>
         </span>
      </div>
   
      <input type="text" name="weight" value="{{ old('weight') ?? $carving->weight }}" class="form-control form-control-sm">
   
   </div>
   
</div>
