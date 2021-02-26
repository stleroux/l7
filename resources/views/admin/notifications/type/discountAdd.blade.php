{{-- DISCOUNT --}}

@if($notification->type === 'App\Notifications\Invoicer\DiscountAddNotification')

	<td>
		A {{ $notification->data['title'] }} of ${{ $notification->data['amount'] }}
		was applied to
		<a href="{{ route('admin.invoicer.invoices.show', $notification->data['invoiceNo']) }}">
			invoice # {{ $notification->data['invoiceNo'] }}
		</a>
		for
		<a href="{{ route('admin.invoicer.clients.show', $client->id) }}">
			{{ ucwords($client->contact_name) }} {{ ($client->company_name ? '[' . ucwords($client->company_name) . ']' : '') }}
		</a>
	</td>

	<td>
		{{ $notification->created_at->format(config('settings.dateFormat'))}}
	</td>
	
	<td class="float-right">
		@include('admin.notifications.actions.grid')
	</td>

@endif
