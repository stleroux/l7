<div>
	{{-- <form method="POST">
		@csrf --}}
	<div class="card card-trans-6">
		<div class="card-body">
			@if(Cart::count() > 0)
			<table class="table table-sm table-hover">
				<thead class="thead-dark">
					<tr class="d-flex">
						{{-- <th scope="col"></th> --}}
						{{-- <th scope="col">ID</th> --}}
						<th class="col-8">Product</th>
						<th class="col-4">Qty</th>
						<th class="hidden text-right col-1">Price</th>
						<th class="hidden text-right col-1">Subtotal</th>
					</tr>
				</thead>

				<tbody>
					@foreach(Cart::content() as $row)
					<tr class="d-flex">
						{{-- <td scope="row">{{ $row->rowId }}</td> --}}
						{{-- <td>{{ $row->id }}</td> --}}
						<td class="col-8">
							<div>{{ $row->name }}</div>
							<span>{{ ($row->options->has('size') ? $row->options->size : '') }}</span>
						</td>
						<td class="col-4">
							<div class="form form-inline">
								<form class="">
									<input type="number" value="{{ $row->qty }}" name="quantity" class="form-control form-control-sm col-4">
									<button type="submit" formaction="{{ route('cart.update', $row->rowId) }}" class="btn btn-xs btn-success">Update</button>
									<button type="submit" formaction="{{ route('cart.remove', $row->rowId) }}" class="btn btn-xs btn-danger">Delete</button>
								</form>
							</div>
						</td>
						<td class="hidden text-right col-1">$ {{ number_format($row->price, 2) }}</td>
						<td class="hidden text-right col-1">$ {{ number_format($row->priceTotal,2) }}</td>
					</tr>
					@endforeach
					{{-- @guest --}}
						<tr>
							<td class="col-12">
								<div class="icheck-primary d-inline">
									<input type="checkbox" id="shippingRequired" wire:model="shippingRequired" value="{{ old('shippingRequired') }}">
									<label for="shippingRequired" class="font-weight-normal">Shipping required
									</label>
								</div>
							</td>
						</tr>
					{{-- @endguest --}}
				</tbody>

				{{-- <tfoot>
					<tr class="d-flex">
						<td class="col-12">
							<b>Note:</b> These are ESTIMATED prices and are subject to change without notice. Shipping fees may also apply.
						</td>
					</tr> --}}
{{-- 					<tr class="d-flex">
						<td class="col-10"></td>
						<td class="col-1 font-weight-bold">Subtotal</td>
						<td class="text-right col-1">$ {{ Cart::subtotal() }}</td>
					</tr> --}}
{{-- 					<tr class="d-flex">
						<td class="col-10"></td>
						<td class="col-1 font-weight-bold">Tax</td>
						<td class="text-right col-1">$ {{ Cart::tax() }}</td>
					</tr> --}}
{{-- 					<tr class="d-flex">
						<td class="col-10"><b>Note:</b> These are ESTIMATED prices and are subject to change without notice. Shipping fees may also apply.</td>
						<td class="col-1 font-weight-bold">Total</td>
						<td class="text-right col-1">$ {{ Cart::total() }}</td>
					</tr> --}}
				{{-- </tfoot> --}}
			</table>
			@else
			{{ config('settings.noRecordsFound') }}
			@endif
		</div>

	</div>



<form method="POST">
		@csrf
		@guest
		@if(Cart::count())
		<a href="{{ route('cart.destroy') }}" class="btn btn-sm btn-danger mb-3">Clear Cart</a>

		<div class="row">

			{{-- @livewire('checkout-form-component') --}}
			<div class="col">
				<div class="card card-trans-4">
					<div class="card-header font-weight-bold card-trans-4">
						Create an account and proceed
					</div>
					<div class="card-body mb-0 pb-2">
						<div class="form-row">
							<div class="col">
								<div class="form-label-group pb-0 mb-2">
									<input type="text"
									name="first_name"
									id="first_name"
									placeholder="First Name"
									value="{{ old('first_name') }}"
									{{-- required --}}
									class="form-control @error('first_name') is-invalid @enderror mb-0 pb-0"
									/>
									<label for="first_name" class="font-weight-normal">First Name</label>
									@error('first_name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="col">
								<div class="form-label-group pb-0 mb-2">
									<input type="text"
									name="last_name"
									id="last_name"
									placeholder="Last Name"
									value="{{ old('last_name') }}"
									{{-- required --}}
									class="form-control @error('last_name') is-invalid @enderror mb-0 pb-0"
									/>
									<label for="last_name" class="font-weight-normal">Last Name</label>
									@error('last_name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="form-row mb-1">
							<div class="col">
								<div class="form-label-group pb-0 mb-2">
									<input type="email"
									name="email"
									id="email"
									placeholder="Email"
									value="{{ old('email') }}"
									{{-- required --}}
									class="form-control @error('email') is-invalid @enderror mb-0 pb-0"
									/>
									<label for="email" class="font-weight-normal">Email</label>
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="form-row mb-1">
							<div class="col-md-6">
								<div class="form-label-group pb-0 mb-2">
									<input type="password"
									name="password"
									id="password"
									class="form-control @error('password') is-invalid @enderror"
									{{-- required --}}
									autocomplete="new-password"
									placeholder="Password"
									/>
									<label for="password" class="font-weight-normal">Password</label>
									@error('password')
									<span
									class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-label-group pb-0 mb-2">
								<input type="password"
								id="password-confirm"
								class="form-control"
								name="password_confirmation"
								{{-- required --}}
								autocomplete="new-password"
								placeholder="Confirm Password"
								/>
								<label for="password-confirm" class="font-weight-normal">Confirm Password</label>
							</div>
						</div>
					</div>
<!------------------------------------------------------------------->
						@if($shippingRequired)
							<div class="form-row mb-1">
								<div class="col">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="address_1"
											id="address_1"
											class="form-control @error('address_1') is-invalid @enderror"
											placeholder="Address"
										/>
										<label for="address_1" class="font-weight-normal">Address</label>
										@error('address_1')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-row mb-1">
								<div class="col">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="city"
											id="city"
											class="form-control @error('city') is-invalid @enderror"
											placeholder="City"
										/>
										<label for="city" class="font-weight-normal">City</label>
										@error('city')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-row mb-1">
								<div class="col">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="province"
											id="province"
											class="form-control @error('province') is-invalid @enderror"
											placeholder="Province"
										/>
										<label for="province" class="font-weight-normal">Province</label>
										@error('province')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="postal_code"
											id="postal_code"
											class="form-control @error('postal_code') is-invalid @enderror"
											placeholder="Postal Code / Zip"
										/>
										<label for="postal_code" class="font-weight-normal">Postal Code / Zip</label>
										@error('postal_code')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
							</div>
						@endif
<!------------------------------------------------------------------->

					<div class="form-row mb-1">
						<div class="col-4">
							<div class="form-label-group pb-0 mb-2">
								<input type="phone"
								name="phone"
								id="phone"
								placeholder="Phone or Cell"
								value="{{ old('phone') }}"
								{{-- required --}}
								data-inputmask="'mask': '(999) 999-9999'"
								class="form-control @error('phone') is-invalid @enderror mb-0 pb-0"
								/>
								<label for="phone" class="font-weight-normal">Telephone</label>
								@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="col">
							<div class="form-label-group pb-0 mb-2">
								<input type="text"
								name="company_name"
								id="company_name"
								placeholder="Company Name"
								value="{{ old('company_name') }}"
								class="form-control @error('company_name') is-invalid @enderror mb-0 pb-0"
								/>
								<label for="company_name" class="font-weight-normal">Company Name</label>
								@error('company_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
					</div>

					<div class="row mb-1 pb-2">
						<div class="col">
							<textarea name="comment" placeholder="Additional comments" class="form-control"></textarea>
						</div>
					</div>

					<div class="form-row mb-0 pb-2">
						<div class="col mb-0 pb-0">
							<button type="submit" formaction="{{ route('cart.requestQuote') }}"  class="btn btn-sm btn-success">Create Account and Proceed</button>
							<button type="reset" class="btn btn-sm btn-default">Reset Form</button>
							<a href="{{ route('contact', ['type'=>'quoteRequest']) }}" class="btn btn-sm btn-primary">Submit via Contact Us form instead</a>
						</div>
					</div>

				</div>
				<div class="card-footer card-trans-6 p-1 text-center">
					Using the Contact Us form will require you to create an account once the estimate is created so you can purchase the requested item(s).
					{{-- Please use the contact us form if you prefer to not create an account. --}}
					{{-- Link to Contact Us page with cart data --}}
				</div>
			</div>
		</div>

		<div class="col">
			<div class="card card-trans-4">
				<div class="card-header font-weight-bold card-trans-4">
					Already have an account with us?
				</div>
				<div class="card-body">
					<a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login to Continue</a>
				</div>
			</div>
		</div>
	</div>
	@endif

	@else

	<div class="row mb-3">
		<div class="col">
			<a href="{{ route('cart.destroy') }}" class="btn btn-sm btn-danger">Clear Cart</a>
			<button type="submit" formaction="{{ route('cart.createQuote') }}" class="btn btn-sm btn-success">Submit Quote Request</button>
		</div>
	</div>

	@endguest

</form>
</div>
