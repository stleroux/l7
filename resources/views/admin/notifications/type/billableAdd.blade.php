{{-- DEPOSIT --}}

@if($notification->type === 'App\Notifications\Invoicer\BillableAddNotification')

	<td>
		New billable item #{{ $notification->data['id'] }} added to
		<a href="{{ route('admin.invoicer.invoices.show', $notification->data['invoiceNo']) }}">
			invoice # {{ $notification->data['invoiceNo'] }}
		</a>
		for
		<a href="{{ route('admin.invoicer.clients.show', $client->id) }}">
			{{ ucwords($client->contact_name) }} {{ ($client->company_name ? '[' . ucwords($client->company_name) . ']' : '') }}
		</a>
		{{-- <br />
		Quantity : {{ $notification->data['quantity'] }}<br />
		Price : {{ $notification->data['price'] }}<br />
		Total : {{ $notification->data['total'] }} --}}
	</td>

	<td>
		{{ $notification->created_at->format(config('settings.dateFormat'))}}
	</td>

	<td class="float-right">
		@include('admin.notifications.actions.grid')
	</td>

@endif
{{-- 
{{ $notification->data['title'] }}
{{ $notification->data['invoiceNo'] }}
{{ $notification->data['client'] }}
{{ $notification->data['product'] }}
{{ $notification->data['quantity'] }}
{{ $notification->data['price'] }}
{{ $notification->data['total'] }}

New billable item with a quantity of ## and a unit price of ## for a total of ## was added to invoice ## for client ##
New billable item added to invoice ## for client##. Quantity: ## Price: ## Total: ##
 invoice ## for client##. Quantity: ## Price: ## Total: ## --}}