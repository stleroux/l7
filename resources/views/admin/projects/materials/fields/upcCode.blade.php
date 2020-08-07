{{-- UPC CODE --}}

<div class="col-12 col-md-3">
	
	<div class="form-group">

	   <label for="name" class="">UPC Code</label>

	   <input
	   	type="text"
	   	name="UPC"
	   	id="UPC"
	   	value="{{ old('UPC') ?? $material->UPC }}"
	   	class="form-control form-control-sm @error('UPC') is-invalid @enderror"
	   	autofocus
	   />
	   
	   @error('UPC')
	      <span class="invalid-feedback" role="alert">
	         <strong>{{ $message }}</strong>
	      </span>
	   @enderror

	</div>

</div>
