@extends('layouts.admin.admin-10-2')

@include('admin.features.create.sections.stylesheet')
@include('admin.features.create.sections.pageHeader')
@include('admin.features.create.sections.breadcrumb')
@include('admin.features.create.sections.sidebar')
@include('admin.features.create.sections.blocks')
@include('admin.features.create.sections.formBegin')
@include('admin.features.create.sections.formEnd')

@section('content')

   @include('admin.features.forms.form')
   @include('admin.features.help')

@endsection
