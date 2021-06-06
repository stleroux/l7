@extends('layouts.UI.app-8')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	Request a New Feature
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('features.index') }}">Feature Requests</a></li>
	<li class="breadcrumb-item">Request a New Feature</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('features.store') }}" method="POST" class="m-0 p-0">
		@csrf

		@include('UI.features.create.topbar')
		
		<div class="row">

			<div class="col">

				<div class="card card-trans-4">

					<div class="card-header section_header">
						<div class="card-title">Feature Information</div>
					</div>

					@include('common.form_submission_error')

					<div class="card-body">
						<div class="row">
							<div class="col">
								@include('UI.features.create.title', ['required'=>'required'])
							</div>
							<div class="col-xl-2">
								@include('UI.features.create.status')
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('UI.features.create.description', ['required'=>'required'])
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->


	</form>
	
	@include('help.index', ['title'=>'Request a Feature', 'icon'=>'features', 'path'=>'UI.features.create'])

@endsection
