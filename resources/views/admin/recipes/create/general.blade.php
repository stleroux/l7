{{-- GENERAL --}}

<div class="tab-pane fade active show" id="recipe-general" role="tabpanel" aria-labelledby="recipe-general-tab">
	
	<div class="row">

		<div class="col-xl-6">
			@include('admin.recipes.form.fields.title')
		</div>

		<div class="col-xl-3">
			@include('admin.recipes.form.fields.category')
		</div>

		<div class="col-xl-3">
		   @include('admin.recipes.form.fields.published_at')
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6">
			@include('admin.recipes.form.fields.ingredients')
		</div>

		<div class="col-xl-6">
			@include('admin.recipes.form.fields.methodology')
		</div>

	</div>

</div>
