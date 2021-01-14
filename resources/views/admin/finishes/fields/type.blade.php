<!-- TYPE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="type" class="">Type</label>
      
      <input
         type="text"
         name="type"
         id="type"
         class="form-control form-control-sm @error('type') is-invalid @enderror"
         value="{{ old('type') ?? $finish->type }}"
         autofocus
      >
      
      @error('type')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
