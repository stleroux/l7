@extends('layouts.UI.app-8')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	<i class="{{ config('icons.features') }}"></i>
	Request a New Feature
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('features.index') }}">Requested Features</a></li>
	<li class="breadcrumb-item">Request a New Feature</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('features.store') }}" method="POST">
		@csrf

		@include('UI.features.create.topbar')
		@include('common.form_submission_error')
		@include('UI.features.forms.form')
		
	</form>
	
	@include('help.index', ['title'=>'Request a Feature', 'icon'=>'features', 'path'=>'UI.features.create'])

@endsection
