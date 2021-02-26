@extends('layouts.admin.admin-10-2')

@include('admin.materials.show.sections.stylesheet')
@include('admin.materials.show.sections.pageHeader')
@include('admin.materials.show.sections.breadcrumb')
@include('admin.materials.show.sections.sidebar')
@include('admin.materials.show.sections.blocks')
@include('admin.materials.show.sections.formBegin')
@include('admin.materials.show.sections.formEnd')

@section('content')

   @include('admin.materials.forms.form')

	@include('common.audits')
	
   @include('admin.materials.help')

@endsection
