@auth
	<li class="nav-item dropdown pb-0 mb-0">

		<a href="#" class="nav-link ml-2 dropdown-toggle" data-toggle="dropdown">
			<i class="{{ config('icons.myLinks') }}"></i>
			
			My Links
		</a>

		<ul class="dropdown-menu dropdown-menu-md dropdown-menu-right pb-0 mb-0">

			@foreach(Auth::user()->mylinks as $link)
				<div class="dropdown-item">
					<div class="text-dark">
						<a href="{{ $link->page_url }}" class="text-dark">
							{{ ucwords($link->name) }}
						</a>
						<span class="float-right">
							<a href="{{ $link->page_url }}" target="_blank" class="text-gray pr-0 mr-0">
								<i class="fas fa-external-link-alt" style="font-size: 11px;"></i>
							</a>
						</span>
					</div>
				</div>
			@endforeach

			<div class="dropdown-divider"></div>

			<a href="{{ route('mylinks.index') }}" class="dropdown-item text-primary text-center">
				Manage Links
			</a>

		</ul>

	</li>
@endauth
