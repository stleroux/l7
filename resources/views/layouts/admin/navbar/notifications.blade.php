{{-- <li class="nav-item dropdown">
	
	<a class="nav-link" data-toggle="dropdown" href="#">
		<i class="far fa-bell"></i>
		@if(auth()->user()->unreadNotifications->count())
			<span class="badge badge-warning navbar-badge">
				{{ auth()->user()->unreadNotifications->count() }}
			</span>
		@endif
	</a>
	
	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
	
		<span class="dropdown-item dropdown-header">Notifications</span>
			
			@foreach(auth()->user()->unreadNotifications as $notification)
				<a href="#" class="pl-2">
					{{-- {{ $notification->data['invoice_no'] }} --}}
{{-- @php
$string = $notification->type;
$contents = explode('\\', $string);
echo end($contents); // displays 'it'
@endphp --}}




				{{-- </a>
			@endforeach
			
		<div class="dropdown-divider"></div>
		

		<a href="#" class="btn btn-sm btn-block btn-outline-primary">See All Notifications</a>
		<a href="{{ route('admin.markAllNotificationsAsRead') }}" class="btn btn-sm btn-block btn-outline-primary">Mark All as Read</a>
	</div>

</li> --}}


<small class="">
	<ul class="p-0 m-0">

		@can('admin-notifications')
			@if(auth()->user()->unreadNotifications->count())
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-warning" href="{{ route('admin.notifications.unread') }}">
						<i class="{{ config('icons.bell') }} text-warning"></i>
						{{ auth()->user()->unreadNotifications->count() }}
					</a>
				</li>
			@endif
		@endcan

		@can('bug-manage')
			@if($newBugsCount)
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-danger" href="{{ route('admin.bugs.new') }}">
						<i class="{{ config('icons.bugs') }} text-danger"></i>
						{{ $newBugsCount }}
					</a>
				</li>
			@endif
		@endcan

		@can('feature-manage')
			@if($newFeaturesCount)
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-success" href="{{ route('admin.features.new') }}">
						<i class="{{ config('icons.features') }} text-success"></i>
						{{ $newFeaturesCount }}
					</a>
				</li>
			@endif
		@endcan
	</ul>
</small>
