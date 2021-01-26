{{-- UPC CODE --}}

<div class="col-12 col-md-3">
	
	<div class="form-group">

	   <label for="name" class="">UPC Code</label>

	   @if(Route::currentRouteName('') == 'admin.materials.show')

	      <div class="p-1 m-0 bg-gray-light">
	         {!! $material->UPC !!}
	      </div>

	   @else

		   <input
		   	type="text"
		   	name="UPC"
		   	id="UPC"
		   	value="{{ old('UPC') ?? $material->UPC }}"
		   	class="form-control form-control-sm @error('UPC') is-invalid @enderror"
		   	autofocus
		   />

		@endif
	   
	   @error('UPC')
	      <span class="invalid-feedback" role="alert">
	         <strong>{{ $message }}</strong>
	      </span>
	   @enderror

	</div>

</div>
