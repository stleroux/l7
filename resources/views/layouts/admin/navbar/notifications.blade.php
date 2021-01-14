{{-- <li class="nav-item dropdown">
	
	<a class="nav-link" data-toggle="dropdown" href="#">
		<i class="far fa-bell"></i>
		<span class="badge badge-warning navbar-badge">
			{{ $newNotificationsCount }}
		</span>
	</a>
	
	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> --}}
	
		{{-- <span class="dropdown-item dropdown-header">{{ $newNotificationsCount }} Notifications</span> --}}
	
		{{-- <div class="dropdown-divider"></div>
		
		<a href="{{ route('admin.bugs.index') }}" class="dropdown-item">
			<i class="{{ config('icons.bugs') }} mr-2"></i> {{ $newBugsCount }} New Bugs Reported
		</a>
		
		<div class="dropdown-divider"></div>
		
		<a href="{{ route('admin.features.index') }}" class="dropdown-item">
			<i class="{{ config('icons.features') }} mr-2"></i> {{ $newFeaturesCount }} New Features Requests
		</a> --}}
		
{{-- 		<div class="dropdown-divider"></div>
		
		<a href="#" class="dropdown-item">
			<i class="fas fa-file mr-2"></i> 3 new reports
			<span class="float-right text-muted text-sm">2 days</span>
		</a>
		
		<div class="dropdown-divider"></div>
		
		<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}

	{{-- </div>

</li>
 --}}

{{-- <li class="border"> --}}
	{{-- @if($newBugsCount) --}}
	{{-- <a class="nav-link px-3" href="{{ route('admin.bugs.index') }}"> --}}
	{{-- <a class="btn btn-sm btn-outline-warning py-0" href="{{ route('admin.bugs.index') }}">
		<span class="text-dark p-0">
		<i class="{{ config('icons.bugs') }} text-danger"></i> --}}
		{{-- <span class="badge badge-warning navbar-badge"> --}}
			{{-- {{ $newBugsCount }}
		</span>
	</a>
	@endif --}}
{{-- </li> --}}

{{-- <li class="border"> --}}
	{{-- @if($newFeaturesCount)
		<a class="btn btn-sm btn-outline-warning py-0" href="{{ route('admin.features.index') }}">
			<i class="{{ config('icons.features') }} text-dark"></i> --}}
			{{-- <span class="badge badge-warning navbar-badge"> --}}
			{{-- <span class="text-dark">
				{{ $newFeaturesCount }}
			</span>
		</a>
	@endif --}}
{{-- </li> --}}


<small class="">
	<ul class="mr-3">
		@if($newBugsCount)
			<li class="d-none d-sm-inline-block p-2">
				<a class="text-danger" href="{{ route('admin.bugs.new') }}">
					<i class="{{ config('icons.bugs') }} text-danger"></i>
					{{ $newBugsCount }}
				</a>
			</li>
		@endif

		@if($newFeaturesCount)
			<li class="d-none d-sm-inline-block p-2">
				<a class="text-success" href="{{ route('admin.features.new') }}">
					<i class="{{ config('icons.features') }} text-success"></i>
					{{ $newFeaturesCount }}
				</a>
			</li>
		@endif
	</ul>
</small>
