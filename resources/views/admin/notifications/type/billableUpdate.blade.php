{{-- DEPOSIT --}}

@if($notification->type === 'App\Notifications\Invoicer\BillableUpdateNotification')

	<td>
		Billable item #{{ $notification->data['id'] }} was updated for 
		<a href="{{ route('admin.invoicer.invoices.show', $notification->data['invoiceNo']) }}">
			invoice # {{ $notification->data['invoiceNo'] }}
		</a>
		for
		<a href="{{ route('admin.invoicer.clients.show', $notification->data['client']) }}">
			{{ $notification->data['client_name'] }}
			{{ ($notification->data['company_name'] ? '[' . ucwords($notification->data['company_name']) . ']' : '') }}
		</a>
	</td>

	<td>
		{{ $notification->created_at->format(config('settings.dateFormat'))}}
	</td>
	
	<td class="float-right">
		@include('admin.notifications.actions.grid')
	</td>

@endif
