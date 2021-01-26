{{-- GENERAL --}}

<div class="tab-pane fade active show" id="post-general" role="tabpanel" aria-labelledby="post-general-tab">
	
	<div class="row">

		<div class="col-xl-6">
			@include('admin.posts.forms.fields.title', ['required'=>'required'])
		</div>

		<div class="col-xl-3">
			@include('admin.posts.forms.fields.category')
		</div>

		<div class="col-xl-3">
		   @include('admin.posts.forms.fields.published_at')
		</div>

		<div class="col-xl-12">
		   @include('admin.posts.forms.fields.body')
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6">
			@include('admin.posts.forms.fields.tags')
		</div>

	</div>

</div>
