{{-- CREATED --}}

@if($notification->type === 'App\Notifications\Invoicer\InvoiceCreatedNotification')

	<td>
		<a href="{{ route('admin.invoicer.invoices.show', $notification->data['invoiceNo']) }}">
			Invoice #{{ $notification->data['invoiceNo'] }}
		</a>
		was
		{{ $notification->data['title'] }}
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
