<div class="card card-trans-4 mb-2">
   <div class="card-header block_header p-2">
      <i class="far fa-star"></i>
      Most Popular Items
   </div>
   <div class="list-group px-1 text-light">
      {{-- <p>Have a look at the most viewed items on the site.</p> --}}
      {{-- @include('homepage.blocks') --}}
      @include('UI.projects.blocks.popular')
		{{-- @include('UI.blog.blocks.popular') --}}
		@include('UI.recipes.blocks.popular')
		{{-- @include('UI.articles.blocks.popular') --}}
		{{-- @include('UI.movies.blocks.popular') --}}
   </div>
</div>
