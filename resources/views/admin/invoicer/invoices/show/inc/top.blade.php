<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">Invoice Information</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4">
						<div><strong>Billed To</strong></div>
							<div>{{ $invoice->client->company_name }}</div>
							<div>{{ $invoice->client->contact_name }}</div>
							<div>{{ $invoice->client->address }}</div>
							<div>{{ $invoice->client->city }}, {{ $invoice->client->province }}</div>
							<div>{{ $invoice->client->postal_code }}</div>
					</div>
					<div class="col-sm-3">
						<div><strong>Invoice N<sup>o</sup></strong></div>
						<div>{{ $invoice->id }}</div>
					</div>
					<div class="col-sm-3">
						@if($invoice->invoiced_at)
							<div><strong>Invoiced</strong></div>
							<div>{{ $invoice->invoiced_at }}</div>
						@else
							<div><strong>Logged</strong></div>
							<div>{{ $invoice->created_at }}</div>
						@endif
					</div>
					<div class="col-sm-2">
						<div><strong>Paid</strong></div>
							<div>{{ $invoice->paid_at }}</div>
					</div>
				</div>
				@if($invoice->work_description)
					<div class="row">
						<div class="col-sm-12">
							<div class="text-muted">Work Description</div>
							<div class="table" style="padding: 10px">{{ $invoice->work_description }}</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>
