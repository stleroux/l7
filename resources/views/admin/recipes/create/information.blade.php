{{-- INFORMATION --}}

<div class="tab-pane fade" id="recipe-information" role="tabpanel" aria-labelledby="recipe-information-tab">

	<div class="row">
		
		<div class="col-xl-2">
	   	@include('admin.recipes.form.fields.servings', ['required'=>'required'])
	   </div>
	   
	   {{-- <div class="col-xl-2">
		   @include('admin.recipes.form.fields.prep_time_hours')
		</div>

		<div class="col-xl-2">
		   @include('admin.recipes.form.fields.prep_time_minutes')
		</div> --}}

		<div class="col-xl-3">
		   @include('admin.recipes.form.fields.prep_time', ['required'=>'required'])
		</div>
		
		{{-- <div class="col-xl-2">
		   @include('admin.recipes.form.fields.cook_time_hours')
		</div>

		<div class="col-xl-2">
		   @include('admin.recipes.form.fields.cook_time_minutes')
		</div> --}}

		<div class="col-xl-3">
		   @include('admin.recipes.form.fields.cook_time', ['required' => 'required'])
		</div>
		
		<div class="col-xl-3">
	   	@include('admin.recipes.form.fields.source')
	   </div>
	
	</div>

</div>
