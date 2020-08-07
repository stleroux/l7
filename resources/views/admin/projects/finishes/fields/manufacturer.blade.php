<!-- MANUFACTURER -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="manufacturer" class="">Manufacturer</label>
      
      <input
         type="text"
         name="manufacturer"
         id="manufacturer"
         class="form-control form-control-sm @error('manufacturer') is-invalid @enderror"
         value="{{ old('manufacturer') ?? $finish->manufacturer }}"
         autofocus
      >
      
      @error('manufacturer')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>