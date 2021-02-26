<form action="{{ route('admin.notifications.destroy', $notification) }}" method="POST">
	@csrf
	@method('DELETE')
	<input type="hidden" value="{{ $notification->id }}">
		@if($notification->read_at)
			@include('admin.notifications.actions.markAsUnread')				
		@else
			@include('admin.notifications.actions.markAsRead')
		@endif
		<input type="submit" class="btn btn-xs btn-danger" value="Delete">
</form>
