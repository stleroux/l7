{{-- DEPOSIT --}}

@if($notification->type === 'App\Notifications\Invoicer\DepositRemoveNotification')

	<td>
		A {{ $notification->data['title'] }} of ${{ $notification->data['amount'] }}
		was applied to
		<a href="{{ route('admin.invoicer.invoices.show', $notification->data['invoiceNo']) }}">
			invoice # {{ $notification->data['invoiceNo'] }}
		</a>
		for
		{{-- <a href="{{ route('admin.invoicer.clients.show', $notification->data['client']) }}"> --}}
		<a href="{{ route('admin.users.show', $notification->data['client']) }}">
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
