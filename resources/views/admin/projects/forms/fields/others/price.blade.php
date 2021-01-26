<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="price">Price</label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-dollar-sign"></i>
         </span>
      </div>

      <input type="text" name="price" value="{{ old('price') ?? $project->price }}" class="form-control form-control-sm">

   </div>

</div>
