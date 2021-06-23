@extends('layouts.admin.admin-10-2')

@include('admin.blocks.show.sections.stylesheet')
@include('admin.blocks.show.sections.pageHeader')
@include('admin.blocks.show.sections.breadcrumb')
@include('admin.blocks.show.sections.sidebar')
@include('admin.blocks.show.sections.blocks')
@include('admin.blocks.show.sections.formBegin')
@include('admin.blocks.show.sections.formEnd')

@section('content')

   @include('admin.blocks.forms.form')
   
	@include('common.audits')

   @include('admin.blocks.help')

@endsection
