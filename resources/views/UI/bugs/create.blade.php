@extends('layouts.UI.app-8')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	Edit Bug Report
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('bugs.index') }}">Bug Reports</a></li>
	<li class="breadcrumb-item">Edit Bug Report</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('bugs.store') }}" method="POST" id="reportBugForm" class="m-0 p-0">
		@csrf

		@include('UI.bugs.create.topbar')
		
		<div class="row">

			<div class="col">

				<div class="card card-primary">

					<div class="card-header">
						<div class="card-title">Bug Information</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								@include('UI.bugs.create.title', ['required'=>'required'])
							</div>
							<div class="col">
								@include('UI.bugs.create.page_url')
							</div>
							<div class="col-xl-2">
								@include('UI.bugs.create.status')
							</div>
						</div>
						<div class="row">
							<div class="col">
								@include('UI.bugs.create.description', ['required'=>'required'])
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->

	@include('UI.bugs.help')

	</form>

@endsection
