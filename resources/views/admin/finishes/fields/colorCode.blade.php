<!-- COLOR CODE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="color_code" class="">Color Code</label>
      
      <input
         type="text"
         name="color_code"
         id="color_code"
         class="form-control form-control-sm @error('color_code') is-invalid @enderror"
         value="{{ old('name') ?? $finish->color_code }}"
         autofocus
      >
      
      @error('color_code')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>