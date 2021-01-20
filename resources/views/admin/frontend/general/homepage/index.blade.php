{{-- GENERAL --}}

{{-- {{ $greeting }} --}}
<div class="tab-pane fade active show" id="homepage" role="tabpanel" aria-labelledby="homepage-tab">

	<div class="container-fluid">

		@include('admin.frontend.general.homepage.fields.greeting')
		@include('admin.frontend.general.homepage.fields.newUser')
		<p class="bg-info p-2">Sections of Interests</p>
		@include('admin.frontend.general.homepage.fields.carvings')
		@include('admin.frontend.general.homepage.fields.projects')
		@include('admin.frontend.general.homepage.fields.recipes')
		@include('admin.frontend.general.homepage.fields.blogs')

</div>
