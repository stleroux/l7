<!-- CLIENT -->

<div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
	
	<label for="client_id" class="required">Client</label>
	
	@if($invoice->status != 'paid')

		<select name="client_id" class="form-control">

			<option value="{{ $invoice->client_id }}">
				{{ $invoice->client->contact_name }}
				{{ $invoice->client->email ? ' :: '.$invoice->client->email : '' }}
				{{ $invoice->client->company_name ? ' :: '.$invoice->client->company_name : '' }}
			</option>

			@foreach($clients as $client)

				<option value="{{ $client->id }}">
					{{ $client->contact_name }}
					{{ $client->email ? ' :: '.$client->email : '' }}
					{{ $client->company_name ? ' :: '.$client->company_name : '' }}
				</option>
				}

			@endforeach

		</select>

	@else

		<input
			type="text"
			readonly
			disabled
			class="form-control"
			value="{{ $invoice->client->contact_name }}
					 {{ $invoice->client->email ? ' :: '.$invoice->client->email : '' }}
					 {{ $invoice->client->company_name ? ' :: '.$invoice->client->company_name : '' }}
			"
		>
	@endif

	<span class="text-danger">{{ $errors->first('client_id') }}</span>

</div>
