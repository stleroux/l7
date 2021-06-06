<li class="nav-item dropdown pb-0 mb-0">

	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
		My Links
	</a>

	<ul class="dropdown-menu dropdown-menu-md dropdown-menu-right pb-0 mb-0">

		@foreach(Auth::user()->mylinks as $link)
			<a href="{{ $link->page_url }}" class="dropdown-item">
				{{ ucwords($link->name) }}
			</a>
		@endforeach

		<div class="dropdown-divider"></div>

		<a href="{{ route('mylinks.index') }}" class="dropdown-item text-primary">
			Manage Links
		</a>

	</ul>

</li>
