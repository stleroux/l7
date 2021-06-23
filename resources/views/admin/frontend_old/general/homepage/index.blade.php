{{-- INDEX --}}

<div class="tab-pane fade active show" id="homepage" role="tabpanel" aria-labelledby="homepage-tab">

	<div class="container-fluid">
		HoMePaGe
		<div class="card-header p-0 border-bottom-0">
            @include('admin.frontend.general.homepage.tabs')
        </div>

        <div class="card-body p-2">
            <div class="tab-content" id="homepage-tabContent">
               @include('admin.frontend.general.homepage.tabs.greeting')
               @include('admin.frontend.general.homepage.tabs.blog')
               @include('admin.frontend.general.homepage.tabs.carvings')
               @include('admin.frontend.general.homepage.tabs.newUser')
               @include('admin.frontend.general.homepage.tabs.projects')
               @include('admin.frontend.general.homepage.tabs.recipes')
            </div>
        </div>

	</div>

</div>

               {{-- @include('admin.frontend.general.about.index') --}}
               {{-- @include('admin.frontend.general.image') --}}
               {{-- @include('admin.frontend.general.information') --}}
               {{-- @include('admin.frontend.general.settings') --}}


{{-- 		@include('admin.frontend.general.homepage.fields.greeting', ['required'=>'required'])
		@include('admin.frontend.general.homepage.fields.newUser', ['required'=>'required'])
		<p class="bg-info p-2">Sections of Interests</p>
		@include('admin.frontend.general.homepage.fields.carvings', ['required'=>'required'])
		@include('admin.frontend.general.homepage.fields.projects', ['required'=>'required'])
		@include('admin.frontend.general.homepage.fields.recipes', ['required'=>'required'])
		@include('admin.frontend.general.homepage.fields.blogs', ['required'=>'required']) --}}