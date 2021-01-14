@extends('layouts.UI.app-fw')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.tree') }} col-2 col-sm-1 text-steel pr-2"></i>
   <div class="col-8 col-sm-7">
      Welcome to TheWoodBarn.ca
   </div>
   <i class="{{ config('icons.tree') }} col-2 col-sm-1 text-steel pl-2"></i>
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li> --}}
@endsection

@section('rightColumn')
   @include('UI.blocks.popularItems')
@endsection

@section('content')

	<div class="container">

		<div class="card bg-danger text-center">

			<div class="card-header">
				<div class="card-title">Unauthorized access.</div>
			</div>

			<div class="card-body">
				<div class="row">
					<div class="col">
						<img src="{{ asset('images\dog.jpg') }}">
					</div>
				</div>
				<div class="row pt-3">
					<div class="col">
						<p class="bg-warning">
							It seems like you do not have sufficient permissions to view this page, perform this action or your session has timed out due to inactiviy.
						</p>
						<p>
							If you think this is an error, please contact the system administrator by using the <a href="/contact">Contact Us</a> page
						</p>
					</div>
				</div>
			</div>

			<div class="card-footer p-2 mb-0">
				<p class="pb-0 mb-0">
					<a href="{{ URL::previous() }}" class="btn btn-default btn-xs">Back To Previous Page</a>
				</p>					
			</div>

		</div>

	</div>

@endsection
