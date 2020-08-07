<!-- UPC CODE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="upc" class="">UPC Code</label>
      
      <input
         type="text"
         name="upc"
         id="upc"
         class="form-control form-control-sm @error('upc') is-invalid @enderror"
         value="{{ old('upc') ?? $finish->upc }}"
         autofocus
      >
      
      @error('upc')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>