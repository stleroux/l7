@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Invoicer :: Register an Activity for Invoice #{{ $invoice->id }}
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

					<div class="col-md-3">

						<div class="form-group">
						   <label for="activity" class="required">
						   	Activity Type
						   </label>
						   <select name="activity" id="activity" class="form-control @error('activity') is-invalid @enderror">
						 		@foreach($activity->activitiesOptions() as $activityOptionKey => $activityOptionValue)
{{-- <option value="{{ $activityOptionKey }}" {{ $activity->activity == $activityOptionValue ? 'selected' : '' }}>
	{{ $activityOptionValue }}
</option> --}}
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
							{{-- <input type="number" name="amount" class="form-control" value="0" step=".01"> --}}
							<span class="text-danger">{{ $errors->first('amount') }}</span>
						</div>

					</div>

					<div class="col-md-3 offset-md-3">
						<div class="form-group">
							<label for="owed" class="">Owed Amount</label>
							<input type="text" name="owed" class="form-control" value="{{ $invoice->total }}" readonly>
						</div>
					</div>

				</div>

				<div class="row">
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

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>

	</form>

@endsection
