{{-- MANUFACTURER --}}

<div class="col-12 col-md-3">

	<div class="form-group">

	   <label for="name" class="">Manufacturer</label>

	   <input
	   	type="text"
	   	name="manufacturer"
	   	id="manufacturer"
	   	value="{{ old('manufacturer') ?? $material->manufacturer }}"
	   	class="form-control form-control-sm @error('manufacturer') is-invalid @enderror"
	   	autofocus
	   />
	   
	   @error('manufacturer')
	      <span class="invalid-feedback" role="alert">
	         <strong>{{ $message }}</strong>
	      </span>
	   @enderror

	</div>

</div>
