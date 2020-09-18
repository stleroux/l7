<div class="row d-flex pb-2">
	<div class="col text-right">
	<!-- Only show the Search Results button if coming from the search results page -->
	@if (false !== stripos($_SERVER['HTTP_REFERER'], "/blog/search"))
		<a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
			<i class="fa fa-arrow-left"></i> Search Results
		</a>
	@endif
	         <!-- Only show if coming from the blog search page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.search')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog 4
            </a>
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Search
            </a>
         @endif

	@if (true !== stripos($_SERVER['HTTP_REFERER'], "/search/posts"))
		<a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
			<i class="fas fa-blog"></i> Blog
		</a>
	@endif
</div>
</div>
