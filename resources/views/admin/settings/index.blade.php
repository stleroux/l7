@extends('layouts.admin.admin-10-2')

@include('admin.settings.index.sections.stylesheet')
@include('admin.settings.index.sections.pageHeader')
@include('admin.settings.index.sections.breadcrumb')
@include('admin.settings.index.sections.sidebar')
@include('admin.settings.index.sections.functions')
@include('admin.settings.index.sections.formBegin')
@include('admin.settings.index.sections.formEnd')

@section('content')


	<div class="card-deck mb-3">
		
		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.appName', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.appURL', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.noRecordsFound', ['required'=>'required'])
			</div>
		</div>		

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.dateFormat', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.authorFormat', ['required'=>'required'])
			</div>
		</div>


		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.siteVersionNo', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.invoicerVersionNo', ['required'=>'required'])
			</div>
		</div>

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.homepageBlogCount', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.popularCount', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.loginCountWarning', ['required'=>'required'])
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.perPage', ['required'=>'required'])
			</div>
		</div>

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				@include('admin.settings.fields.modules', ['required'=>'required'])
			</div>
		</div>

	</div>

   @include('admin.settings.help')

@endsection
