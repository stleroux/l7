{{-- INFORMATION --}}

<div class="tab-pane fade" id="recipe-information" role="tabpanel" aria-labelledby="recipe-information-tab">

	<div class="row">
		
		<div class="col-xs-6 col-md-3 col-lg-2">
	   	@include('admin.recipes.forms.fields.servings')
	   </div>
	   
	   {{-- <div class="col-xl-2">
		   @include('admin.recipes.forms.fields.prep_time_hours')
		</div>

		<div class="col-xl-2">
		   @include('admin.recipes.forms.fields.prep_time_minutes')
		</div> --}}

		<div class="col-xs-6 col-md-3 col-lg-2">
		   @include('admin.recipes.forms.fields.prep_time')
		</div>
		
		{{-- <div class="col-xl-2">
		   @include('admin.recipes.forms.fields.cook_time_hours')
		</div>

		<div class="col-xl-2">
		   @include('admin.recipes.forms.fields.cook_time_minutes')
		</div> --}}

		<div class="col-xs-6 col-md-3 col-lg-2">
		   @include('admin.recipes.forms.fields.cook_time')
		</div>
		
		<div class="col-xs-6 col-md-3 col-lg-2">
	   	@include('admin.recipes.forms.fields.source')
	   </div>
	
	</div>

</div>
