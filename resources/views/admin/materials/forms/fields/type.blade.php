{{-- TYPE --}}

<div class="col-12 col-md-3">
	
	<div class="form-group">

	   <label for="name" class="">Type</label>

	   @if(Route::currentRouteName('') == 'admin.materials.show')

	      <div class="p-1 m-0 bg-gray-light">
	         {!! $material->type ?? 'N/A' !!}
	      </div>

	   @else

		   <input
		   	type="text"
		   	name="type"
		   	id="type"
		   	value="{{ old('type') ?? $material->type }}"
		   	class="form-control form-control-sm @error('type') is-invalid @enderror"
		   	autofocus
		   />

		@endif
	   
	   @error('type')
	      <span class="invalid-feedback" role="alert">
	         <strong>{{ $message }}</strong>
	      </span>
	   @enderror

	</div>

</div>
