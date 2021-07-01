<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">Invoice Information</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-5">
						<div><strong>Billed To</strong></div>
							<div>{{ $invoice->client->company_name ? $invoice->client->company_name : '' }}</div>
							<div>{{ $invoice->client->contact_name }}</div>
							<div>{{ $invoice->client->telephone ? $invoice->client->telephone : '' }}</div>
							<div>{{ $invoice->client->address ? $invoice->client->address : '' }}</div>
							<div>
								{{ $invoice->client->city ? $invoice->client->city : '' }}
								{{ $invoice->client->province ? ', '.$invoice->client->province : '' }}
							</div>
							<div>{{ $invoice->client->postal_code ? $invoice->client->postal_code : '' }}</div>
					</div>
					<div class="col-sm-7">
						<div class="row">
							<div class="col text-center">
								<div><strong>Invoice N<sup>o</sup></strong></div>
								<div>{{ $invoice->id }}</div>
							</div>
							<div class="col text-center">
								<div><strong>Quoted Date</strong></div>
								<div>{{ $invoice->quoted_at }}</div>
							</div>
							<div class="col text-center">
								<div><strong>Estimate Date</strong></div>
								<div>{{ $invoice->created_at }}</div>
							</div>
							<div class="col text-center">
								<div><strong>Invoiced Date</strong></div>
								<div>{{ $invoice->invoiced_at }}</div>
							</div>
							<div class="col text-center">
								<div><strong>Paid Date</strong></div>
								<div>{{ $invoice->paid_at }}</div>
							</div>
						</div>
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
