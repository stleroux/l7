@extends('layouts.UI.app-8')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	Edit Link
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('mylinks.index') }}">My Links</a></li>
	<li class="breadcrumb-item">Edit Link</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('mylinks.store') }}" method="POST" id="" class="m-0 p-0">
		@csrf

		@include('UI.mylinks.create.topbar')
		
		<div class="row">

			<div class="col">

				<div class="card card-trans-4">

					<div class="card-header section_header">
						<div class="card-title">Link Information</div>
					</div>

					@include('common.form_submission_error')

					<div class="card-body">
						<div class="row">
							<div class="col">
								@include('UI.mylinks.create.name', ['required'=>'required'])
							</div>
							<div class="col">
								@include('UI.mylinks.create.page_url')
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->

	@include('help.index', ['title'=>'My Links', 'icon'=>'', 'path'=>'UI.mylinks.create'])

	</form>

@endsection
