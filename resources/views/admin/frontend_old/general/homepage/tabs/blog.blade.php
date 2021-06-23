<div class="tab-pane fade show" id="blog" role="tabpanel" aria-labelledby="blog-tab">
	
	<form action="{{ route('admin.homepage.update') }}" method="POST">
		@csrf
		@method("PUT")
		<input type="text" name="page" value="homepage">
		
		<div class="card">

			<div class="card-header p-2 bg-primary">Blog Posts</div>

			<div class="card-body p-2">

				<div class="row">

					<div class="form-group col-10">

						<label for="title" class="{{ $required ?? '' }}">
							{{ $label ?? 'Title' }}
						</label>
						
						<input
							type="text"
							name="title"
							id="title"
							class="form-control form-control-sm @error('title') is-invalid @enderror"
							value="{{ old('title') ?? $blogs->title }}"
							placeholder="Title"
							data-inputmask=""
							autofocus
							onfocus="this.focus();this.select()"
						/>
						
						@error('title')
						  <span class="invalid-feedback" role="alert">
							 <strong>{{ $message }}</strong>
						  </span>
						@enderror

					</div>

					<div class="form-group col-2">
						<label for="name" class="required">Name</label>
						<input
							type="text"
							name="name"
							id="name"
							class="form-control form-control-sm @error('name') is-invalid @enderror"
							value="{{ $blogs->name }}"
						/>
					</div>

				</div>

				<div class="row">

					<div class="form-group col-12">
						<label for="body" class="required">Body</label>
						<textarea name="body" id="wysiwyg-small" class="form-control form-control-sm wysiwyg-small">{{ old('body') ?? $blogs->body }}</textarea>
						<div class="pl-1 bg-danger">{{ $errors->first('body') }}</div>
					</div>

				</div>
			</div>
			
			<div class="card-footer">
				<button type="submit" class="btn btn-sm btn-primary">Save</button>
				<button type="reset" class="btn btn-sm btn-secondary">Reset</button>
			</div>

		</div>

	</form>

</div>
