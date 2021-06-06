@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader', 'DASHBOARD')

@section('breadcrumb')
@endsection

@section('content')

<div class="container-fluid m-0 p-0">

	@include('admin.dashboard.invoicerStats')

	<div class="row mb-0">
		<div class="col-xl-9">
			<div class="card">
				<div class="card-body mb-0 pb-0">
					<div class="row row-cols-1 row-col-xl-2">
						@include('admin.dashboard.topBoxes.bugs')							
						@include('admin.dashboard.topBoxes.audits')
						@include('admin.dashboard.topBoxes.features')
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row row-cols-1 row-col-xl-2">
						@include('admin.dashboard.charts.billablesByItem')
						@include('admin.dashboard.charts.carvingsByCategory')
						@include('admin.dashboard.charts.recipesByCategory')
						@include('admin.dashboard.charts.projectsByCategory')
						@include('admin.dashboard.charts.bugsByType')
						@include('admin.dashboard.charts.featuresByType')
						@include('admin.dashboard.charts.usersPerMonth')
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="row row-cols-1 row-col-md-2 row-col-xl-1">
				@include('admin.dashboard.infoBoxes.permissions')
				@include('admin.dashboard.infoBoxes.posts')
				@include('admin.dashboard.infoBoxes.projects')
				@include('admin.dashboard.infoBoxes.recipes')
				@include('admin.dashboard.infoBoxes.roles')
				@include('admin.dashboard.infoBoxes.users')
			</div>
		</div>
	</div>
</div>




{{-- <div class="container-fluid"> --}}
{{-- <div class="row"> --}}
	{{-- <div class="col-xl-8"> --}}
		
{{-- 		<div class="card">
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
		</div> --}}
		
		{{-- <div class="card">
			<div class="card-body">
				<div class="row">
         		
         		
         		
         		
         	</div>
         	<div class="row">
         		
         		
         	</div>

				<div class="row">
         		
         	</div> --}}
         	{{-- <div class="row">
         		<div class="col-xl-3">
	               <h3>{{ $usersByRoleChart->options['chart_title'] }}</h3>
	             	{!! $usersByRoleChart->renderHtml() !!}
         		</div>
         	</div> --}}
			{{-- </div>
		</div> --}}


	{{-- </div> --}}
	
	{{-- <div class="col-xl-2"> --}}
		{{-- @include('admin.dashboard.infoBoxes.permissions')
		@include('admin.dashboard.infoBoxes.posts')
		@include('admin.dashboard.infoBoxes.projects')
		@include('admin.dashboard.infoBoxes.recipes')
		@include('admin.dashboard.infoBoxes.roles')
		@include('admin.dashboard.infoBoxes.users') --}}
	{{-- </div> --}}

{{-- </div> --}}


		

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
