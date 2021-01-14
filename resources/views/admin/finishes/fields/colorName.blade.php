<!-- COLOR NAME -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="color_name" class="">Color Name</label>
      
      <input
         type="text"
         name="color_name"
         id="color_name"
         class="form-control form-control-sm @error('color_name') is-invalid @enderror"
         value="{{ old('color_name') ?? $finish->color_name }}"
         autofocus
      >
      
      @error('color_name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>