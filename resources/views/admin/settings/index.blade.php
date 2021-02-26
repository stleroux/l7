@extends('layouts.admin.admin-10-2')

@include('admin.settings.index.sections.stylesheet')
@include('admin.settings.index.sections.pageHeader')
@include('admin.settings.index.sections.breadcrumb')
@include('admin.settings.index.sections.sidebar')
@include('admin.settings.index.sections.blocks')
@include('admin.settings.index.sections.formBegin')
@include('admin.settings.index.sections.formEnd')

@section('content')

	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="modules-tab" data-toggle="tab" href="#modules" role="tab" aria-controls="modules" aria-selected="false">Modules</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="invoicer-tab" data-toggle="tab" href="#invoicer" role="tab" aria-controls="invoicer" aria-selected="false">Invoicer</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			@include('admin.settings.inc.home')
		</div>
		<div class="tab-pane fade" id="modules" role="tabpanel" aria-labelledby="modules-tab">
			@include('admin.settings.inc.modules')
		</div>
		<div class="tab-pane fade" id="invoicer" role="tabpanel" aria-labelledby="invoicer-tab">
			@include('admin.settings.inc.invoicer')
		</div>
		<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
			@include('admin.settings.inc.settings')
		</div>
	</div>









{{-- <div class="row px-2">
	<div class="nav flex-column nav-pills col-2" id="tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link active border"
			id="home-tab"
			data-toggle="pill"
			href="#home"
			role="tab"
			aria-controls="home"
			aria-selected="true">
			Home
		</a>
		<a class="nav-link border"
			id="modules-tab"
			data-toggle="pill"
			href="#modules"
			role="tab"
			aria-controls="modules"
			aria-selected="false">
			Modules
		</a>
		<a class="nav-link border"
			id="invoicer-tab"
			data-toggle="pill"
			href="#invoicer"
			role="tab"
			aria-controls="invoicer"
			aria-selected="false">
			Invoicer
		</a>
		<a class="nav-link border"
			id="settings-tab"
			data-toggle="pill"
			href="#settings"
			role="tab"
			aria-controls="settings"
			aria-selected="false">
			Settings
		</a>
	</div>
	<div class="tab-content col-10" id="tabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			@include('admin.settings.inc.home')
		</div>
		<div class="tab-pane fade" id="modules" role="tabpanel" aria-labelledby="modules-tab">
			@include('admin.settings.inc.modules')
		</div>
		<div class="tab-pane fade" id="invoicer" role="tabpanel" aria-labelledby="invoicer-tab">
			@include('admin.settings.inc.invoicer')
		</div>
		<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
			@include('admin.settings.inc.settings')
		</div>
	</div>
</div> --}}









   @include('admin.settings.help')

@endsection
