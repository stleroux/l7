@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
	<i class="{{ config('icons.edit') }}"></i>
	Invoicer :: Show Invoice # {{ $invoice->id }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
	<li class="breadcrumb-item"><a href="{{ route('admin.invoicer.invoiced') }}">Invoices</a></li>
	<li class="breadcrumb-item">Show</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.invoiced.show.topbar')

	<div class="card pb-0 mb-3">

		<div class="card-header">
			@include('admin.invoicer.invoiced.show.inc.header')
		</div>
		
		<div class="card-body">
			@include('admin.invoicer.invoiced.show.inc.top')
			@include('admin.invoicer.invoiced.show.inc.billables')
			@include('admin.invoicer.invoiced.show.inc.bottom')
		</div>

	</div>

	@include('common.audits')

@endsection
				