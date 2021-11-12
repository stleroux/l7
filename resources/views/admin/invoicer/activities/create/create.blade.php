@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Invoicer :: Register an Activity for {{ ucwords($invoice->status) }} #{{ $invoice->id }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Register Activity</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('admin.invoicer.activities.store', $invoice) }}" method="POST">
		@csrf
		
		<input type="hidden" name="invoice_id" value="{{ $invoice->id }}">

		@include('admin.invoicer.activities.create.topbar')

		<div class="card">
			
			<div class="card-body">

				<div class="row">
					<div class="col-9">
						<div class="row">

							<div class="col-md-3">
								<div class="form-group">
								   <label for="activity" class="required">
								   	Activity Type
								   </label>
								   <select name="activity" id="activity" class="form-control @error('activity') is-invalid @enderror">
								 		@foreach($activity->activitiesOptions() as $activityOptionKey => $activityOptionValue)
											<option value="{{ $activityOptionKey }}" {{ old('activity') == $activityOptionKey ? 'selected' : '' }}>
												{{ $activityOptionValue }}
											</option>
								      @endforeach
								   </select>
									<span class="text-danger">{{ $errors->first('activity') }}</span>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
									<label for="amount" class="required">Amount</label>
									<input type="text" name="amount" class="form-control" value="{{ old('amount') }}">
									<span class="text-danger">{{ $errors->first('amount') }}</span>
								</div>
							</div>

							<div class="col-md-9">
								<div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
									<label for="comment">Comment</label>
									<textarea name="comment" class="form-control">{{ old('comment') }}</textarea>
									<span class="text-danger">{{ $errors->first('comment') }}</span>
									<small id="passwordHelpBlock" class="form-text text-muted">
									  Provide comment if substracting a value.
									</small>
								</div>
							</div>

						</div>
					</div>

					<div class="col-3">
						<div class="form-group">
							<label for="owed" class="">Owed Amount</label>
							<input type="text" name="owed" class="form-control" value="$ {{ number_format($invoice->total, 2, '.', ' ') }}" readonly>
						</div>
						<div class="form-group">
							<label for="hst" class="">Taxes Amount</label>
							<input type="text" name="hst" class="form-control" value="$ {{ number_format($invoice->hst, 2, '.', ' ') }}" readonly>
						</div>
						<div class="form-group">
							<label for="deposits" class="">Current Deposits</label>
							<input type="text" name="deposits" class="form-control" value="$ {{ number_format($current_deposits, 2, '.', ' ') }}" readonly>
						</div>
						<div class="form-group">
							<label for="discounts" class="">Current Discounts</label>
							<input type="text" name="discounts" class="form-control" value="$ {{ number_format($current_discounts, 2, '.', ' ') }}" readonly>
						</div>
						<div class="form-group">
							<label for="payments" class="">Current Payments</label>
							<input type="text" name="payments" class="form-control" value="$ {{ number_format($current_payments, 2, '.', ' ') }}" readonly>
						</div>
					</div>

				</div>

			</div>

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>

	</form>

@endsection
