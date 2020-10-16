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
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="row">
         		<div class="col-xl-4">
	               <h3>{{ $usersPerMonthChart->options['chart_title'] }}</h3>
	             	{!! $usersPerMonthChart->renderHtml() !!}            			
         		</div>
         		<div class="col-xl-4">
	             	<h3>{{ $bugsByTypeChart->options['chart_title'] }}</h3>
	             	{!! $bugsByTypeChart->renderHtml() !!}            			
         		</div>
         		<div class="col-xl-4">
	             	<h3>{{ $featuresByTypeChart->options['chart_title'] }}</h3>
	             	{!! $featuresByTypeChart->renderHtml() !!}            			
         		</div>
{{--          		<div class="col-xl-4">
	             	<h3>{{ $rolesByTypeChart->options['chart_title'] }}</h3>
	             	{!! $rolesByTypeChart->renderHtml() !!}            			
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
	{{-- {!! $bugsByTypeChart->renderChartJsLibrary() !!} --}}
	{!! $usersPerMonthChart->renderJs() !!}
	{!! $bugsByTypeChart->renderJs() !!}
	{!! $featuresByTypeChart->renderJs() !!}
	{{-- {!! $rolesByTypeChart->renderJs() !!} --}}
@endsection
