{{-- NAME --}}

<div class="col-12 col-md-3">

	<div class="form-group">

	   <label for="name" class="required">Name</label>

	   @if(Route::currentRouteName('') == 'admin.materials.show')

	      <div class="p-1 m-0 bg-gray-light">
	         {!! $material->name ?? 'N/A' !!}
	      </div>

	   @else

		   <input
		   	type="text"
		   	name="name"
		   	id="name"
		   	value="{{ old('name') ?? $material->name }}"
		   	class="form-control form-control-sm @error('name') is-invalid @enderror"
		   	autofocus
		   />

		@endif
	   
	   @error('name')
	      <span class="invalid-feedback" role="alert">
	         <strong>{{ $message }}</strong>
	      </span>
	   @enderror

	</div>

</div>
