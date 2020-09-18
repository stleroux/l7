@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer') }}"></i>
   Invoicer
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Invoicer</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			<span class="h3">Welcome to the Invoicer</span>
			<span class="float-right"><small>V {{ Config::get('settings.invoicer_version') }}</small></span>
		</div>
		<div class="card-body">
			<h5 class="card-title"></h5>
			<p class="card-text">
				This will be the main user page.<br />
				No special access will be required to access this page.
			</p>
		</div>
	</div>

@endsection
