<!-- NAME -->

<div class="col-xs-12 col-sm-6">
   
   <div class="form-group">
      
      <label for="name" class="required">Carving Name</label>
      
      <input
         type="text"
         name="name"
         id="name"
         class="form-control form-control-sm required @error('name') is-invalid @enderror"
         value="{{ old('name') ?? $carving->name }}"
         autofocus
         onfocus="this.focus();this.select()">
      
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
