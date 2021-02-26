@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Invoicer :: Edit Activity #{{ $activity->id }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Edit Activity</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('admin.invoicer.activities.update', $activity) }}" method="POST">
		@csrf
		@method('PUT')
		
		{{-- <input type="text" name="invoice_id" value="{{ $invoice->id }}"> --}}
		<input type="text" name="activity_id" value="{{ $activity->id }}">

		@include('admin.invoicer.activities.edit.topbar')

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
						            <option value="{{ $activityOptionKey }}" {{ $activity->activity == $activityOptionValue ? 'selected' : '' }}>{{ $activityOptionValue }}</option>
						         @endforeach
						   </select>
						   
						   @error('activity')
						      <span class="invalid-feedback" role="alert">
						         <strong>{{ $message }}</strong>
						      </span>
						   @enderror

						</div>
					</div>

					<div class="col-md-3">
						
						<div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
							<label for="amount" class="required">Amount</label>
							<input type="text" name="amount" class="form-control" value="{{ $activity->amount }}">
							<span class="text-danger">{{ $errors->first('amount') }}</span>
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
