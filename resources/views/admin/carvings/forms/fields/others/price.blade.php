<div class="col-xs-12 col-sm-6 col-md-3">

	<label for="price">Price</label>

	<div class="input-group input-group-sm">

		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon2">
				<i class="fas fa-dollar-sign"></i>
			</span>
		</div>

		@if(Route::currentRouteName('') == 'admin.carvings.show')

			<div class="col p-1 m-0 bg-gray-light border">
				{!! $carving->price ?? 'N/A' !!}
			</div>

		@else

			<input type="text" name="price" value="{{ old('price') ?? $carving->price }}" class="form-control form-control-sm">

		@endif

	</div>

</div>
