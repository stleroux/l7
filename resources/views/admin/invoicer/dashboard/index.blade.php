@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer-dashboard') }}"></i>
   Invoicer :: Dashboard
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li> --}}
   <li class="breadcrumb-item">Invoicer</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

<div class="card">

{{-- 	<div class="card-header">
		<span class="h3">Dashboard</span>
	</div>
 --}}
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				@include('admin.invoicer.dashboard.inc.totals')
			</div>
		</div>
		
		<div class="row mt-2">
			<div class="col-xs-12 col-sm-3">
				@include('admin.invoicer.dashboard.inc.invoices')
			</div>

			<div class="col-xs-12 col-sm-6">
				@include('admin.invoicer.dashboard.inc.clients')
			</div>

			<div class="col-xs-12 col-sm-3">
				@include('admin.invoicer.dashboard.inc.products')
			</div>
		</div>
	</div>

	<div class="card-footer p-2">
		<span class="float-right">
			<small>V {{ Config::get('settings.invoicer_version') }}</small>
		</span>		
	</div>

</div>

@endsection
