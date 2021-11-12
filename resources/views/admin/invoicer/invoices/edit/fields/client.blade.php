<!-- CLIENT -->

<div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
	
	<label for="client_id" class="required">Client</label>
	
	@if($invoice->status == 'quote' || $invoice->status == 'estimate')

		<select name="client_id" class="form-control">

			<option value="{{ $invoice->client_id }}">
				{{ $invoice->client->last_name }}{{ $invoice->client->first_name ? ', '.$invoice->client->first_name : '' }}
				{{ $invoice->client->email ? ' :: '.$invoice->client->email : '' }}
				{{ $invoice->client->company_name ? ' :: '.$invoice->client->company_name : '' }}
			</option>

			@foreach($clients as $client)

				<option value="{{ $client->id }}">
					{{ $client->last_name }}{{ $client->first_name ? ', '.$client->first_name : '' }}
					{{ $client->email ? ' :: '.$client->email : '' }}
					{{ $client->company_name ? ' :: '.$client->company_name : '' }}
				</option>
				{{-- } --}}

			@endforeach

		</select>

	@else

		<input
			type="hidden"
			name="client_id"
			class="form-control"
			value="{{ $invoice->client->id}}" />

		<div class="p-2 m-0 bg-gray-light">
         {{ $invoice->client->contact_name }}
			{{ $invoice->client->email ? ' :: '.$invoice->client->email : '' }}
			{{ $invoice->client->company_name ? ' :: '.$invoice->client->company_name : '' }}
      </div>
	@endif

	<span class="text-danger">{{ $errors->first('client_id') }}</span>

</div>
