<!-- NAME -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="name" class="required">Finish Name</label>
      
      <input
         type="text"
         name="name"
         id="name"
         class="form-control form-control-sm required @error('name') is-invalid @enderror"
         value="{{ old('name') ?? $finish->name }}"
         autofocus
      >
      
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>