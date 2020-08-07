<!-- DESCRIPTION -->
<div class="col-6">

   <div class="form-group">

      <label for="description" class="">Description</label>

      <input
      	type="text"
      	id="description"
      	name="description"
      	class="form-control form-control-sm @error('description') is-invalid @enderror"
      	value="{{ old('description') }}" >

      @error('description')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>

</div>
