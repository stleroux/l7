@extends('layouts.admin.admin-10-2')

@include('admin.bugs.create.sections.stylesheet')
@include('admin.bugs.create.sections.pageHeader')
@include('admin.bugs.create.sections.breadcrumb')
@include('admin.bugs.create.sections.sidebar')
@include('admin.bugs.create.sections.blocks')
@include('admin.bugs.create.sections.formBegin')
@include('admin.bugs.create.sections.formEnd')

@section('content')

	@include('admin.bugs.forms.form')

	<!-- CARD FOOTER -->
	<div class="card-footer pt-1 pb-1 pl-2">
		Fields marked with an <span class="required"></span> are required
	</div>

	@include('admin.bugs.help')

@endsection
