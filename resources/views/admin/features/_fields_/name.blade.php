<!-- NAME -->
<div class="form-group col-12">

   <label for="name" class="col-form-label">Name</label>

   <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $role->name }}">
   
   @error('name')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
