@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader', 'DASHBOARD')

@section('breadcrumb')
@endsection

@section('content')

<div class="row">
	<div class="col-xl-10">
		
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xl-2">
						@include('admin.dashboard.infoBoxes.bugs')							
					</div>
					<div class="col-xl-2">
						@include('admin.dashboard.infoBoxes.features')							
					</div>
					<div class="col-xl-2">
						@include('admin.dashboard.infoBoxes.audits')
					</div>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="row">
         		<div class="col-xl-3">
	               <h3>{{ $usersPerMonthChart->options['chart_title'] }}</h3>
	             	{!! $usersPerMonthChart->renderHtml() !!}
         		</div>
         		<div class="col-xl-3">
	             	<h3>{{ $bugsByTypeChart->options['chart_title'] }}</h3>
	             	{!! $bugsByTypeChart->renderHtml() !!}
         		</div>
         		<div class="col-xl-3">
	             	<h3>{{ $featuresByTypeChart->options['chart_title'] }}</h3>
	             	{!! $featuresByTypeChart->renderHtml() !!}
         		</div>
         		<div class="col-xl-3">
	             	<h3>{{ $carvingsByCategoryChart->options['chart_title'] }}</h3>
	             	{!! $carvingsByCategoryChart->renderHtml() !!}
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-xl-6">
         			<h3>{{ $recipesByCategoryChart->options['chart_title'] }}</h3>
	             	{!! $recipesByCategoryChart->renderHtml() !!}
         		</div>
         		<div class="col-xl-6">
         			<h3>{{ $projectsByCategoryChart->options['chart_title'] }}</h3>
	             	{!! $projectsByCategoryChart->renderHtml() !!}
         		</div>
         	</div>

				<div class="row">
         		<div class="col-xl-6">
         			<h3>{{ $billablesByItemChart->options['chart_title'] }}</h3>
	             	{!! $billablesByItemChart->renderHtml() !!}
         		</div>
         	</div>
         	{{-- <div class="row">
         		<div class="col-xl-3">
	               <h3>{{ $usersByRoleChart->options['chart_title'] }}</h3>
	             	{!! $usersByRoleChart->renderHtml() !!}
         		</div>
         	</div> --}}
			</div>
		</div>

		<div class="card">
			<div class="card-header h3">Invoicer</div>
			<div class="card-body pb-0 mb-0">
				
				<div class="row mb-0">
					
					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Sales</div>
							<div class="p-2 text-center">
								{{ number_format($totalSales, 2, '.', ', ') }}$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Payments</div>
							<div class="p-2 text-center">
								{{ number_format($totalPayments, 2, '.', ', ') }}$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Discounts</div>
							<div class="p-2 text-center">
								{{ number_format($totalDiscounts, 2, '.', ', ') }}$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Total Owed</div>
							<div class="p-2 text-center">
								{{ number_format($totalOwed, 2, '.', ', ') }}$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Invoices</div>
							<div class="p-2 text-center">
								{{ $invoicesCount }}
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Billable Items</div>
							<div class="p-2 text-center">
								{{ $billableItemsCount }}
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Clients</div>
							<div class="p-2 text-center">
								{{ $clientsCount }}
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Products</div>
							<div class="p-2 text-center">
								{{ $productsCount }}
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Carvings</div>
							<div class="p-2 text-center">
								{{ $carvingsCount }}
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Items</div>
							<div class="p-2 text-center">
								{{ $otherItemsCount }}
							</div>
						</div>
					</div>

					{{-- <div class="card col-2">
						<div class="card-header">Clients</div>
						<div class="card-body">
							Sales Amount
						</div>
					</div>

					<div class="card col-2">
						<div class="card-header">Invoices</div>
						<div class="card-body">
							Sales Amount
						</div>
					</div>

					<div class="card col-2">
						<div class="card-header"></div>
						<div class="card-body">
							Sales Amount
						</div>
					</div>

					<div class="card col-2">
						<div class="card-header">Sales</div>
						<div class="card-body">
							Sales Amount
						</div>
					</div> --}}
				</div>

			</div>
		</div>

	</div>
	
	<div class="col-xl-2">
		@include('admin.dashboard.infoBoxes.permissions')
		@include('admin.dashboard.infoBoxes.posts')
		@include('admin.dashboard.infoBoxes.projects')
		@include('admin.dashboard.infoBoxes.recipes')
		@include('admin.dashboard.infoBoxes.roles')
		@include('admin.dashboard.infoBoxes.users')
	</div>

</div>


@endsection

@section('scripts')
	{!! $usersPerMonthChart->renderChartJsLibrary() !!}
	{!! $usersPerMonthChart->renderJs() !!}
	{!! $bugsByTypeChart->renderJs() !!}
	{!! $featuresByTypeChart->renderJs() !!}
	{!! $carvingsByCategoryChart->renderJs() !!}
	{!! $recipesByCategoryChart->renderJs() !!}
	{!! $projectsByCategoryChart->renderJs() !!}
	{!! $billablesByItemChart->renderJs() !!}
	{{-- {!! $usersByRoleChart->renderJs() !!} --}}
@endsection
