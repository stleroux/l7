<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Design Time <small>(Mins)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      <input type="number" name="design_time_mins" value="{{ old('desigb_time_mins') ?? $carving->design_time_mins }}" class="form-control form-control-sm">

   </div>

</div>
