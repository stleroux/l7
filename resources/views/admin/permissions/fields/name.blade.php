<!-- NAME -->
<div class="col-6">

   <div class="form-group">

      <label for="name" class="required">Name</label>

      <input
      	type="text"
      	id="name"
      	name="name"
      	class="form-control form-control-sm @error('name') is-invalid @enderror"
         value="{{ old('name') ?? $permission->name }}"
         placeholder="i.e.: Model-Permission">

      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>

</div>
