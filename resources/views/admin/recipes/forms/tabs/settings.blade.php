{{-- SETTINGS --}}

<div class="tab-pane fade" id="recipe-settings" role="tabpanel" aria-labelledby="recipe-settings-tab">

	<div class="row">
	
		<div class="col-xl-2">
			@include('admin.recipes.forms.fields.personal')
		</div>

	</div>

	<div class="row">

		<div class="col">
			@include('admin.recipes.forms.fields.author_notes')			
		</div>

	</div>

</div>
