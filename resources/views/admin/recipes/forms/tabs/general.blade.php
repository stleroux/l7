{{-- GENERAL --}}

<div class="tab-pane fade active show" id="recipe-general" role="tabpanel" aria-labelledby="recipe-general-tab">
	
	<div class="row">

		<div class="col-xl-6">
			@include('admin.recipes.forms.fields.title', ['required'=>'required'])
		</div>

		<div class="col-xl-3">
			@include('admin.recipes.forms.fields.category', ['required'=>'required'])
		</div>

		<div class="col-xl-3">
		   @include('admin.recipes.forms.fields.published_at')
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6">
			@include('admin.recipes.forms.fields.ingredients', ['required'=>'required'])
		</div>

		<div class="col-xl-6">
			@include('admin.recipes.forms.fields.methodology', ['required'=>'required'])
		</div>

	</div>

</div>
