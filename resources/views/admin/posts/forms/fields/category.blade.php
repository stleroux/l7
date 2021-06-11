<!-- CATEGORY -->

<div class="form-group">
	
	<label for="category_id" class="required">Category</label>

	@if(Route::currentRouteName('') == 'admin.posts.show')

      <div class="p-1 m-0 bg-gray-light">
         {{ ucwords($post->category->name) ?? 'N/A' }}
      </div>

   @else

		<select name="category_id" id="category_id" class="form-control form-control-sm @error('category_id') is-invalid @enderror">
			@if(last(request()->segments()) === 'create')
				<option value="" selected>Select One</option>
			@endif
			@foreach ($categories as $category)
				@if(last(request()->segments()) === 'create')
					<option disabled>{{ ucfirst($category->name) }}</option>
				@endif
				@foreach ($category->children as $children)
					@if(last(request()->segments()) === 'create')
						<option value="{{ $children->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
					@endif
					@if(last(request()->segments()) === 'edit')
						<option value="{{ $children->id }}" {{ ($post->category_id == $children->id ) ? 'selected' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
					@endif
				@endforeach
			@endforeach
		</select>

		@error('category_id')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror

	@endif

</div>
