<!-- MODEL NAME -->
<div class="col-6">

   <div class="form-group">

      <label for="modelName" class="required">Model Name</label>

      <input
         type="text"
         name="modelName"
         class="form-control form-control-sm @error('modelName') is-invalid @enderror"
         placeholder="Model Name">

      @error('modelName')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>

</div>
