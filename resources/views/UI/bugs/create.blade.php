@extends('layouts.UI.app-8')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	<i class="{{ config('icons.bugs') }}"></i>
	Report a Bug
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('bugs.index') }}">Bug Reports</a></li>
	<li class="breadcrumb-item">Report a Bug</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('bugs.store') }}" method="POST" id="reportBugForm">
		@csrf

		@include('UI.bugs.create.topbar')
		@include('common.form_submission_error')
		@include('UI.bugs.forms.form')

	</form>

	@include('help.index', ['title'=>'Report a Bug', 'icon'=>'bugs', 'path'=>'UI.bugs.create'])

@endsection
