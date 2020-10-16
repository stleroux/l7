{{-- INFORMATION --}}
<div class="tab-pane fade" id="recipe-information" role="tabpanel" aria-labelledby="recipe-information-tab">

	<div class="row">

		<div class="col-xs-6 col-md-3 col-lg-2">
	   	@include('admin.recipes.form.fields.servings', ['required'=>'required'])
	   </div>
	   
	   <div class="col-xs-6 col-md-3 col-lg-2">
		   @include('admin.recipes.form.fields.prep_time', ['required'=>'required'])
		</div>
		
		<div class="col-xs-6 col-md-3 col-lg-2">
		   @include('admin.recipes.form.fields.cook_time', ['required'=>'required'])
		</div>
		
		<div class="col-xs-6 col-md-3 col-lg-2">
	   	@include('admin.recipes.form.fields.source')
	   </div>
	
	</div>

</div>
